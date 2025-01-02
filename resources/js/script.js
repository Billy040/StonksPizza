function updatePrijs(standaardPrijs, formaat, pizzaId) {

    const vermenigvuldiging = {
        1: 0.8,
        2: 1.0,
        3: 1.2
    };

    const nieuwePrijs = (standaardPrijs * vermenigvuldiging[formaat]).toFixed(2);

    document.getElementById(`prijs-${pizzaId}`).textContent = `€${nieuwePrijs}`;
}

window.updatePrijs = updatePrijs;
