var $ = document

let inputCode = $.querySelectorAll("input")
let elemShowTimer = $.querySelector(".show-timer")
let correctIndex = 0
let reverseArray = Array.from(inputCode).reverse()
reverseArray.forEach(input => {
    input.addEventListener("input", () => {
        if (isNaN(input.value)) {
            input.value = "";
        } else if (input.value.length > 1) {
            input.value = input.value.slice(0, 1);
        } else {
            if (reverseArray.length - 1 > correctIndex) {
                correctIndex += 1
                reverseArray[correctIndex].focus()
            }
        }
    })
})
let minute = 2
let second = 0

function timerOfCode() {
    elemShowTimer.innerHTML = ""
    if (second === -1) {
        --minute
        second = 59
    }

    if (second < 10) {
        second = "0" + second
    }
    if (minute < 10) {
        if (minute[0] != 0) {
            minute = "0" + minute
        }
    }
    if (second == 0 && minute == 0) {
        finishedTimer()
        clearInterval(timer)
    } else {
        elemShowTimer.insertAdjacentHTML("beforeend", `
        <a href="#" class="text-decoration-none elem-show-err"> (ارسال دوباره) ${second} : ${minute}</a>
        `)
    }
    --second
}
let timer = setInterval(() => {
    timerOfCode()
}, 1000);

function finishedTimer() {
    elemShowTimer.innerHTML = ""
    elemShowTimer.insertAdjacentHTML("beforeend", `
    <a href="#" class="text-decoration-none elem-show-err" onclick="restartTimer()">ارسال دوباره</a>
    `)
}
function restartTimer() {
    minute = 2
    second = 0
    timer = setInterval(() => {
        timerOfCode()
    }, 1000);
}