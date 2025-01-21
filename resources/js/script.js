function updatePrijs(standaardPrijs, formaatId, pizzaId) {
    const vermenigvuldiging = {
        1: 0.8,
        2: 1.0,
        3: 1.2
    };


    const selectElement = document.querySelector(`#size_${pizzaId}`);
    const selectedOption = selectElement.options[selectElement.selectedIndex];


    const sizeName = selectedOption.textContent;


    const nieuwePrijs = (standaardPrijs * vermenigvuldiging[formaatId]).toFixed(2);


    document.getElementById(`prijs-${pizzaId}`).textContent = `€${nieuwePrijs}`;


    document.getElementById(`calculated_price_${pizzaId}`).value = nieuwePrijs;
    document.getElementById(`size_name_${pizzaId}`).value = sizeName;
    document.getElementById(`size_hidden_${pizzaId}`).value = formaatId;
}

window.updatePrijs = updatePrijs;
