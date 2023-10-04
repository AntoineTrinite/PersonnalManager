const timerDisplay = document.querySelector('.time-mod-timer');
const minusTimer = document.querySelector('.minus-btn');
const plusTimer = document.querySelector('.plus-btn');
const startTimer = document.querySelector('.start-btn');
const notificationSound = document.getElementById('notificationSound');

// valeur de base du timer
let pomoTimerValue = 25;

// Partie pour paramétrer le timer
timerDisplay.textContent = `${pomoTimerValue}:00`;

minusTimer.addEventListener('click', () => {
    if (pomoTimerValue > 1) {
        pomoTimerValue--;
        timerDisplay.textContent = `${pomoTimerValue}:00`;
    }
});

plusTimer.addEventListener('click', () => {
    if (pomoTimerValue < 60) {
        pomoTimerValue++;
        timerDisplay.textContent = `${pomoTimerValue}:00`;
    }
});

// Partie pour actionner le timer
let timerInterval;

startTimer.addEventListener('click', () => {

    startTimer.disabled = true;

    let totalTime = pomoTimerValue * 60;
    let minutes, seconds;

    timerInterval = setInterval(() => {
        minutes = Math.floor(totalTime / 60);
        seconds = totalTime % 60;


        const displayMinutes = minutes < 10 ? `0${minutes}` : minutes;
        const displaySeconds = seconds < 10 ? `0${seconds}` : seconds;

        timerDisplay.textContent = `${displayMinutes}:${displaySeconds}`;

        if (totalTime <= 0) {
            startTimer.disabled = false;
            notificationSound.play();
            clearInterval(timerInterval)
        } else {
            totalTime--;
        }
    }, 1000);
})