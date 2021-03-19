{
	// Tasks 1 and 2
	let taxableIncomes = [65000, 85000, 101000];

	for (let taxableIncome of taxableIncomes) {
		let taxRate = (60000 <= taxableIncome && taxableIncome <= 10000) ? 0.35 : 0.4;
		let tax = taxableIncome * taxRate;

		console.log(`Taxable income was ${taxableIncome}, tax amount was ${tax}, 
		and the income after tax value is ${taxableIncome - tax}`);
	}
}

{
	// Task 3
	const calTax = (taxableIncome) => taxableIncome *
		(60000 <= taxableIncome && taxableIncome <= 10000 ? 0.35 : 0.4);

	console.log(calTax(40000));

	// Task 4
	const taxableIncomes = [50000, 77000, 120000];
	console.log(taxableIncomes);

	// Task 5
	const taxAmount = taxableIncomes.map((income) => calTax(income));
	console.log(taxAmount);

	// Task 6
	let incomeAfterTax = [];
	for (let i = 0; i < taxableIncomes.length; i++) {
		incomeAfterTax.push(taxableIncomes[i] - taxAmount[i]);
	}
	console.log(incomeAfterTax);
}
