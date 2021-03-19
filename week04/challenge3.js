console.log('\n--- Challenge 3 ---\n');

{
	const calTax = (taxableIncome) => taxableIncome *
		(60000 <= taxableIncome && taxableIncome <= 10000 ? 0.35 : 0.4);

	// Task 1
	const taxableIncomes = [35000, 45000, 50000, 62000, 70500, 82500, 97000, 101000, 132000, 150000];

	// Task 2
	let taxes = [];
	let netIncome = [];

	// Task 3
	for (let income of taxableIncomes) {
		let tax = calTax(income);
		taxes.push(tax);
		netIncome.push(income - tax);
	}

	console.log('taxable income', taxableIncomes);
	console.log('taxes', taxes);
	console.log('net income', netIncome);

	// Task 4
	const calAverage = (arr) => {
		let sum = 0;

		for (let num of arr) {
			sum += num;
		}

		return sum / arr.length;
	};

	console.log('final average of net income is', calAverage(netIncome));
}
