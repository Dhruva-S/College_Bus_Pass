const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('containers');

signUpButton.addEventListener('click', () =>
container.classList.add('right-panel-active'));

signInButton.addEventListener('click', () =>
container.classList.remove('right-panel-active'));



//below code to find out size of each letter for title animation

// const logo = document.querySelectorAll('#text-af path');

// for(let i=0; i<logo.length;i++)
// {
//     console.log(`Letter ${i} is ${logo[i].getTotalLength()}`);
// }