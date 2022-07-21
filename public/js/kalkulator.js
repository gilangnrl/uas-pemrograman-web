const calculator = document.querySelector('.calculator')
const keys = calculator.querySelector('#calculator-key')
const display = calculator.querySelector('.calculator-display')

keys.addEventListener('click', e => {
    if (e.target.matches('button')) {
        const key = e.target.textContent
        const numberDisplay = display.textContent
        const previousKeyType = calculator.dataset.previousKeyType
        const firstNum = calculator.dataset.firstNum
        const operator = calculator.dataset.operator
        Array.from(e.target.parentNode.children)
            .forEach(k => k.classList.remove('is-depressed'))

        if (!e.target.dataset.action) {
            console.log(display.textContent)
            if (numberDisplay === '0' || previousKeyType === 'operator' || previousKeyType === 'finish') {
                display.textContent = key
                calculator.dataset.previousKeyType = ''
            } else {
                display.textContent = display.textContent + key
            }
        }
        if (e.target.dataset.action === 'square') {
            console.log('square');
        }
        if (e.target.dataset.action === 'decimal') {
            if (!numberDisplay.includes('.')) {
                display.textContent = display.textContent + '.'
            }
        }
        if (e.target.dataset.action === 'equal') {
            calculator.dataset.secondNum = numberDisplay
            const secondNum = numberDisplay
            console.log("ssssssss", secondNum)
            if (operator !== '' || operator) {
                const total = calculate(firstNum, operator, secondNum)
                display.textContent = total

                // clear input
                calculator.dataset.previousKeyType = 'finish'
                calculator.dataset.operator = ''
                calculator.dataset.firstNum = total
                calculator.dataset.secondNum = ''
            }
        }
        if (e.target.dataset.action === 'clear') {
            display.textContent = '0'
            calculator.dataset.firstNum = null
            calculator.dataset.secondNum = null
            calculator.dataset.operator = ""
        }
        if (
            e.target.dataset.action === 'add' ||
            e.target.dataset.action === 'subtract' ||
            e.target.dataset.action === 'times' ||
            e.target.dataset.action === 'divide' ||
            e.target.dataset.action === 'mod' ||
            e.target.dataset.action === 'square'
        ) {
            e.target.classList.add('is-depressed')
            calculator.dataset.operator = e.target.dataset.action
            if (!calculator.dataset.firstNum || firstNum === '' || isNaN(firstNum)) {
                calculator.dataset.firstNum = numberDisplay
            } else if (previousKeyType !== 'finish') {
                calculator.dataset.firstNum = isNaN(calculate(firstNum, operator, numberDisplay)) ? numberDisplay : calculate(firstNum, operator, numberDisplay)
            }
            calculator.dataset.previousKeyType = 'operator'
        }
    }
})

const calculate = (num1, op, num2) => {
    let total;
    if (op === 'add')
        total = parseFloat(num1) + parseFloat(num2)
    if (op === 'subtract')
        total = parseFloat(num1) - parseFloat(num2)
    if (op === 'times')
        total = parseFloat(num1) * parseFloat(num2)
    if (op === 'divide')
        total = parseFloat(num1) / parseFloat(num2)
    if (op === 'mod')
        total = parseFloat(num1) % parseFloat(num2)
    if (op === 'square')
        total = Math.pow(num1, num2)

    console.log(num1, num2)
    return total
}