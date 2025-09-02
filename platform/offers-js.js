$(document).ready(function(){
    function loadOffers(category = null) {
        let url = 'get-offers.php';
        if (category) {
            url += '?category=' + category;
        }

        $.getJSON(url, function(data){
            $('#offers-list').empty();

            data.forEach(function(offer){
                $('#offers-list').append(`
                    <div class="offer-box">
                        <img src="offer-images/${offer.picture_url}" alt=".">
                        <div class="offer-text">
                            <h1>${offer.title}</h1>
                            <h2>${offer.company_name}</h2>
                            <p>${offer.details}</p>
                            <div>
                                <p class="price">${offer.price} <span>EUR</span></p>
                                <button type="button">I'm interested</button>
                            </div>
                        </div>
                    </div>
                `);
            });
        });
    }
    loadOffers();

});