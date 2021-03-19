{
	// Task 1
	let kangaroo = (98 + 109 + 89 + 90) / 4;
	let gumtree = (89 + 92 + 92 + 111) / 4;
	console.log(kangaroo, gumtree);

	if (kangaroo > gumtree) {
		alert('Kangaroos win!')
	} else if (gumtree > kangaroo) {
		alert('Gumtree win!');
	} else {
		alert('Both win');
	}
}

{
	// Task 2
	const MIN_SCORE = 100;
	let kangaroo = (98 + 113 + 102 + 100) / 4;
	let gumtree = (109 + 96 + 124 + 98) / 4;
	console.log(kangaroo, gumtree);

	if (kangaroo > gumtree && kangaroo >= MIN_SCORE) {
		alert('Kangaroos win!')
	} else if (gumtree > kangaroo && gumtree >= MIN_SCORE) {
		alert('Gumtree win!');
	} else {
		alert('Both win');
	}
}

{
	// Task 3
	const MIN_SCORE = 100;
	let kangaroo = (98 + 112 + 102 + 100) / 4;
	let gumtree = (110 + 96 + 107 + 99) / 4;
	console.log(kangaroo, gumtree);

	if (MIN_SCORE < kangaroo && kangaroo > gumtree) {
		alert('Kangaroos win!')
	} else if (MIN_SCORE < gumtree && gumtree > kangaroo) {
		alert('Gumtree win!');
	} else if (gumtree === kangaroo && gumtree >= MIN_SCORE) {
		alert('Both win');
	} else {
		alert('Nobody wins');
	}
}

{
	// Task 4

	// const calculateAverage = (a, b, c, d, e) => (a + b + c + d + e) / 5;

	const calculateSum = (...scores) => scores.reduce((prev, current) => prev + current);
	const calculateAverage = (...scores) => calculateSum(scores) / scores.length;

	const determineWinner = (avgKangaroo, avgGumtree) => {
		if (avgKangaroo >= 2 * avgGumtree) {
			alert(`Kangaroo wins! (${avgKangaroo} vs ${avgGumtree})`);
		} else if (avgKangaroo > 2 * avgGumtree) {
			alert(`Gumtree wins! (${avgGumtree} vs ${avgKangaroo})`);
		} else {
			alert('No winner');
		}
	};

	let kangaroo = calculateAverage(44, 56, 71, 85, 54);
	let gumtree = calculateAverage(65, 54, 49, 23, 34);
	console.log(kangaroo, gumtree);

	determineWinner(kangaroo, gumtree);
}
