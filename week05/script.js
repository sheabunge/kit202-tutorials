//Set the secret my Number
let secretNumber = Math.trunc(Math.random() * 30) + 1;
let chance = 10;

// You are going to create a guessing number game
//When there is no input and a user clicks on the 'check' button, p class = "message" section will display "No number available!"

//When a user's input number is not matched with the randomly generated secret number above, (when guess number is too high or too low)
//it will display the message 'Too high' or 'Too low' in the p class = "message" section.
// Whenever a user types a guessing number (input the guess number in ), it will reduce the chance by 1.
// When a user cannot correctly guess the number within the chance (When the number of chance = 0), display the message "You lost the game!"


// When a user guesses correct number, it changes the element as below
// div class = "number" width to 40rem
// div class = "number" text to display the secretNumber
// body background colour : #fca103
// display the message "You got it ! Congrats!!"


//When a user click the 'again' button, it reset the game - restores the initial value of the chance and the number.
