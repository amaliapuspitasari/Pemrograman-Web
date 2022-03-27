let btn = document.getElementById('btn');

btn.addEventListener('click', function(e) {
    let price = document.getElementById('price').value;
    let discount = document.getElementById('discount').value;

    let cdiscount = document.getElementById('cdiscount');
    let newprice = document.getElementById('newprice');

    cdiscount.innerHTML = 'Total Diskon : ' + (price * discount / 100);
    newprice.innerHTML = 'Harga Akhir : ' + (price - (price * discount / 100));
});