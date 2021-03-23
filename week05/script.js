//Set the secret my Number
let secretNumber = Math.trunc(Math.random() * 30) + 1;
let chance = 10;

// You are going to create a guessing number game
const displayMsg = (message) => {
	document.querySelector('.message').textContent = message;
};

document.getElementById('check').addEventListener('click', () => {
	const guess = Number(document.querySelector('.guess').value);

	if (!guess) {
		// When there is no input and a user clicks on the 'check' button,
		// p class = "message" section will display "No number available!"
		displayMsg('No number available!');

	} else if (guess === secretNumber) {
		// When a user guesses correct number, it changes the element as below
		// div class = "number" width to 40rem
		// div class = "number" text to display the secretNumber
		// body background colour : #fca103
		// display the message "You got it ! Congrats!!"

		const numberOutput = document.querySelector('.number');
		numberOutput.style.width = '40rem';
		numberOutput.textContent = '' + secretNumber;

		document.body.style.backgroundColor = '#fca103';
		displayMsg('You got it! Congrats!!');

	} else {
		// When a user's input number is not matched with the randomly generated secret number above,
		// (when guess number is too high or too low)
		// it will display the message 'Too high' or 'Too low' in the p class = "message" section.
		displayMsg(guess > secretNumber ? 'Too high' : 'Too low');

		// Whenever a user types a guessing number (input the guess number in ), it will reduce the chance by 1.
		chance--;

		// When a user cannot correctly guess the number within the chance (When the number of chance = 0),
		// display the message "You lost the game!"
		if (chance <= 0) {
			chance = 0;
			displayMsg('You lost the game!');
		}

		document.querySelector('.chance').textContent = '' + chance;
	}
});

//When a user click the 'again' button, it reset the game - restores the initial value of the chance and the number.
document.querySelector('.btn.again').addEventListener('click', () => {
	secretNumber = Math.trunc(Math.random() * 30) + 1;
	chance = 10;

	displayMsg('Start guessing…');
	document.querySelector('.chance').textContent = '' + chance;
	document.querySelector('.number').textContent = '?';

	document.querySelector('.guess').value = '';

	document.body.style.backgroundColor = '#222';
	document.querySelector('.number').style.width = '15rem';
});
