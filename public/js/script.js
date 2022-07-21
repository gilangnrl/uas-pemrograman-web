// search jquery
$(document).ready(function () {
    $("#search-input").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#list-news li a").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});


/////////////////// Sandbox ////////////////////

var dataMovie = []


var dataList = $('#list-data')
var sorted = false
var list = ""
var key = ""

$(function () {
    var url = "https://gilang-301.com/test.json"
    if (localStorage.getItem('data') === null) {
        $.getJSON(url, function (data) {
            for (let i = 0; i < data.length; i++) {
                console.log(data[i].name)
                dataMovie.push(data[i])
            }
            console.log(dataMovie)
            localStorage.setItem('data', JSON.stringify(dataMovie))
        }
        );
    } else {
        dataMovie = JSON.parse(localStorage.getItem('data'))
    }
    appendData(dataMovie)
})


$(function () {
    $("#add-button").on('click', function () {
        var nameInput = $('#name-input')
        var ratingInput = $('#rating-input')
        if (nameInput.val() || ratingInput.val()) {
            dataMovie.push({
                name: nameInput.val(),
                rating: ratingInput.val()
            })
            localStorage.setItem('data', JSON.stringify(dataMovie))
            appendData(dataMovie)
            nameInput.val(null)
            ratingInput.val(null)
        } else {
            alert("belum ada inputan")
        }
    })
    $("#remove-button").on('click', function () {
        localStorage.removeItem('data')
        dataMovie = []
        appendData(dataMovie)
    })
    // list delete
    $('body').on('click', '.data-item button', function () {
        let currentIndex = $(this).parent().parent().index()
        let filtered = dataMovie.filter(function (value, index) {
            return index !== currentIndex
        })
        dataMovie = filtered
        if (filtered.length < 1) {
            localStorage.removeItem('data')
        } else {
            localStorage.setItem('data', JSON.stringify(filtered))
        }
        appendData()
    })
    //sorting
    // by name
    $('#sorting-name').on('click', function () {
        key = "name"
        $('#list-data .data-item').sort(sorted == true ? Descending_sort : Ascending_sort).appendTo('#list-data')
    })
    // by rating
    $('#sorting-rating').on('click', function () {
        key = "rating"
        $('#list-data .data-item').sort(sorted == true ? Descending_sort : Ascending_sort).appendTo('#list-data')
    })
})

function Ascending_sort(a, b) {
    let dataA = getSortElement(a)
    let dataB = getSortElement(b)
    sorted = true
    return (dataB < dataA ? 1 : -1);
}
function Descending_sort(a, b) {
    let dataA = getSortElement(a)
    let dataB = getSortElement(b)
    sorted = false
    return (dataA < dataB ? 1 : -1)
}

function getSortElement(el) {
    let type
    if (key === "rating")
        type = "#list-rating"
    if (key === "name")
        type = "#list-name"
    console.log()
    return $(el).find(type).text().toUpperCase()
}

function appendData() {
    list = ''
    $('#list-data .data-item').remove()
    for (let i = 0; i < dataMovie.length; i++) {
        list += `
        <div class="data-item">
            <p id="list-name">${dataMovie[i].name}</p>
            <div class="list-right">
                <p>&star; <span id="list-rating">${parseFloat(dataMovie[i].rating)}</span></p>
                <button>Delete</button>
            </div>
        </div>`
    }
    $('#list-data').append(list)
}

$(document).ready(function () {
    $("#search-game").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#list-data .data-item").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});