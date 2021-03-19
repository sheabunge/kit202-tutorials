console.log('\n--- Challenge 1 ---\n');

{
	console.log('\nTask 1');

	let kangaroo = (98 + 109 + 89 + 90) / 4;
	let gumtree = (89 + 92 + 92 + 111) / 4;
	console.log(kangaroo, gumtree);

	if (kangaroo > gumtree) {
		console.log('Kangaroos win!')
	} else if (gumtree > kangaroo) {
		console.log('Gumtree win!');
	} else {
		console.log('Both win');
	}
}

{
	console.log('\nTask 2');

	const MIN_SCORE = 100;
	let kangaroo = (98 + 113 + 102 + 100) / 4;
	let gumtree = (109 + 96 + 124 + 98) / 4;
	console.log(kangaroo, gumtree);

	if (kangaroo > gumtree && kangaroo >= MIN_SCORE) {
		console.log('Kangaroos win!')
	} else if (gumtree > kangaroo && gumtree >= MIN_SCORE) {
		console.log('Gumtree win!');
	} else {
		console.log('Both win');
	}
}

{
	console.log('\nTask 3');

	const MIN_SCORE = 100;
	let kangaroo = (98 + 112 + 102 + 100) / 4;
	let gumtree = (110 + 96 + 107 + 99) / 4;
	console.log(kangaroo, gumtree);

	if (MIN_SCORE < kangaroo && kangaroo > gumtree) {
		console.log('Kangaroos win!')
	} else if (MIN_SCORE < gumtree && gumtree > kangaroo) {
		console.log('Gumtree win!');
	} else if (gumtree === kangaroo && gumtree >= MIN_SCORE) {
		console.log('Both win');
	} else {
		console.log('Nobody wins');
	}
}

{
	console.log('\nTask 4');

	// const calculateAverage = (a, b, c, d, e) => (a + b + c + d + e) / 5;

	const calculateSum = (...scores) => scores.reduce((prev, current) => prev + current);
	const calculateAverage = (...scores) => calculateSum(scores) / scores.length;

	const determineWinner = (avgKangaroo, avgGumtree) => {
		if (avgKangaroo >= 2 * avgGumtree) {
			console.log(`Kangaroo wins! (${avgKangaroo} vs ${avgGumtree})`);
		} else if (avgKangaroo > 2 * avgGumtree) {
			console.log(`Gumtree wins! (${avgGumtree} vs ${avgKangaroo})`);
		} else {
			console.log('No winner');
		}
	};

	let kangaroo = calculateAverage(44, 56, 71, 85, 54);
	let gumtree = calculateAverage(65, 54, 49, 23, 34);
	console.log(kangaroo, gumtree);

	determineWinner(kangaroo, gumtree);
}
