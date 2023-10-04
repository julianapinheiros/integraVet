const rows = document.querySelectorAll(".row-line");

rows.forEach((row, index) => {
    currIndex = index + 1;
    const quantityInput = row.querySelector(`input[data-row='${currIndex}']`);
    const incrementButton = row.querySelector(`button[data-row='${currIndex}'][data-role='increment']`);
    const decrementButton = row.querySelector(`button[data-row='${currIndex}'][data-role='decrement']`);

    if(!incrementButton || !decrementButton) return;
    
    incrementButton.addEventListener("click", function() {
        quantityInput.value++;
    });
    
    decrementButton.addEventListener("click", function() {
        if(+quantityInput.value === 0) return;
        quantityInput.value--;
    })
})
