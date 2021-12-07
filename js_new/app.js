// window.onload = () => {
// 	let button = document.querySelector("#btn");

// 	// Function for calculating BMI
// 	button.addEventListener("click", calculateBMI);
// };


	/* Getting input from user into height variable.
	Input is string so typecasting is necessary. */
	let Mark_heigth1 = 78;

	/* Getting input from user into weight variable.
	Input is string so typecasting is necessary.*/
	let Mark_weigth1 = 1.69;


	let John_heigth1=92;
	let John_weigth1 = 1.95;


	// let result = document.querySelector("#result");

		// Fixing upto 2 decimal places
		let John_bmi = (John_weigth1 / ((John_heigth1 * John_heigth1)/ 100000)).toFixed(1);
		let Mark_bmi = (Mark_weigth1 / ((Mark_heigth1 * Mark_heigth1)/ 100000)).toFixed(1);

		if (Mark_bmi>John_bmi) {
			console.log("marks BMI(body mass index) "+Mark_bmi+" is greater than John BMI(body mass index) "+John_bmi );
		}
		else if(Mark_bmi<John_bmi){
			console.log("john BMI(body mass index) "+John_bmi+" is greater than Mark BMI(body mass index) "+Mark_bmi );

		};



		// console.log(John_bmi);
		// console.log(Mark_bmi);
	

