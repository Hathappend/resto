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


    // Definisikan selectedMenus di luar fungsi agar dapat diakses di seluruh file
    var selectedMenus = {};

    function setupMenuButtons(minusButtonId, plusButtonId, inputId, menu) {
        var minusButton = document.getElementById(minusButtonId);
        var plusButton = document.getElementById(plusButtonId);
        var input = document.getElementById(inputId);
        var stock = document.getElementById('stock' + menu.id);

        function updateMenuQuantity() {
            var quantity = parseInt(input.value);
            if (isNaN(quantity) || quantity < 0) quantity = 0;

            // Simpan atau update menu ke selectedMenus
            if (quantity === 0) {
                delete selectedMenus[menu.id];
            } else {
                selectedMenus[menu.id] = {
                    image: menu.image,
                    title: menu.title,
                    price: menu.price,
                    quantity: quantity
                };
            }

            // Update daftar produk
            updateProductList();
        }

        function updateStock(change) {
            var currentStock = parseInt(stock.innerText.replace('Tersisa ', ''));
            stock.innerText = 'Tersisa ' + (currentStock - change);
        }

        plusButton.addEventListener('click', function() {
        var currentStock = parseInt(stock.innerText.replace('Tersisa ', ''));
            if (currentStock > 0) {
                var currentValue = parseInt(input.value);
                input.value = currentValue + 1;
                updateMenuQuantity();
                updateStock(1);
            } else {
                alert("Stok habis! Tidak bisa menambah kuantitas.");
            }
        });

        minusButton.addEventListener('click', function() {
            var currentValue = parseInt(input.value);
            if (currentValue > 0) {
                input.value = currentValue - 1;
                updateMenuQuantity();
                updateStock(-1);
            }
        });

        // Inisialisasi dengan nilai input awal
        updateMenuQuantity();
    }

    function updateProductList() {
        var productList = document.getElementById('product-list');
        if (!productList) return;

        productList.innerHTML = ''; // Bersihkan daftar produk yang ada

        // Tambahkan setiap item dari selectedMenus ke product list
        for (var menuId in selectedMenus) {
            var menu = selectedMenus[menuId];
            var quantity = menu.quantity;

            if (quantity > 0) {
                productList.innerHTML += `
                    <div class="row border mx-0 mb-3 py-2 radius-10 cursor-pointer">
                        <div class="col-sm-12">
                            <div class="d-flex align-items-center">
                                <div style="width:80px;height:80px;">
                                    <img src="${menu.image}" class="p-1 img-fluid" alt="" />
                                </div>
                                <div class="ms-2">
                                    <h6 class="mb-1 card-title menu-title">${menu.title}</h6>
                                    <p class="price-label mb-0 fw-bold pt-1"><span>${menu.price}</span></p>
                                    <p class="quantity-label mb-0 pt-1"><span>Qty: ${menu.quantity}</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
            }
        }
        // Panggil fungsi untuk memperbarui total
            updateTotals();
    }

    function updateTotals() {
        var menus = selectedMenus;
        var totalItem = 0;
        var taxRate = parseFloat(document.getElementById('tax').value) / 100; // Konversi menjadi desimal

        for (var menuId in selectedMenus) {
            var menu = selectedMenus[menuId];
            totalItem += menu.quantity * parseFloat(menu.price.replace('Rp. ', '').replace(',', ''));
        }

        var tax = totalItem * taxRate; // Hitung pajak
        var totalOverall = totalItem + tax; // Tambahkan pajak ke total item

        document.getElementById('total-item').innerText = 'Rp. ' + totalItem.toLocaleString();
        document.getElementById('total-overall').innerText = 'Rp. ' + totalOverall.toLocaleString();
        document.getElementById('menusInput').value = JSON.stringify(menus);
        document.getElementById('totalItemInput').value = totalItem;
        document.getElementById('totalOverallInput').value = totalOverall;
    }


    function initializeMenuFunctionality() {
        // Ambil elemen-elemen menu yang ada di halaman
        var menuElements = document.querySelectorAll('.menu-item');

        menuElements.forEach(function(menuElement) {
            var minusButtonId = menuElement.getAttribute('data-minus-id');
            var plusButtonId = menuElement.getAttribute('data-plus-id');
            var inputId = menuElement.getAttribute('data-input-id');
            var menu = {
                id: menuElement.getAttribute('data-menu-id'),
                image: menuElement.getAttribute('data-menu-image'),
                title: menuElement.getAttribute('data-menu-title'),
                price: menuElement.getAttribute('data-menu-price')
            };

            setupMenuButtons(minusButtonId, plusButtonId, inputId, menu);
        });
    }

    // Panggil fungsi inisialisasi setelah halaman dimuat
    document.addEventListener('DOMContentLoaded', initializeMenuFunctionality);


