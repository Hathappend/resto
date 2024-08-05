function showElementBySelect(className, selectId){
    // Hide all content divs with the specified class name
    const allDivs = document.querySelectorAll(`.${className}`);
    allDivs.forEach(div => div.style.display = 'none');

    // Get selected value
    const selectedValue = document.getElementById(selectId).value;

    // Show the corresponding div
    if (selectedValue) {
        const divToShow = document.getElementById(selectedValue);
        if (divToShow) {
            divToShow.style.display = 'block';
        }
    }
}

function populateYearSelect(selectId, startYear, numYears) {
    const yearSelect = document.getElementById(selectId);
    const currentYear = new Date().getFullYear();

    // Clear existing options
    yearSelect.innerHTML = '<option value="">Pilih Tahun</option>';

    for (let i = 0; i < numYears; i++) {
        const year = startYear + i;
        const option = document.createElement('option');
        option.value = year;
        option.textContent = year;
        yearSelect.appendChild(option);
    }
}

function showImageByUserInput(){

    $(document).ready(function(){

        $('#image').change(function(e){

            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src', e.target.result);
                $('#showImage').show();
            }
            reader.readAsDataURL(e.target.files[0]);
        });
    });
}

