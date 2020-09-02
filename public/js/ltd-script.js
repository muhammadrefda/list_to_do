// nav
const navToggle = document.querySelector('.navbar-toggle input');
const nav = document.querySelector('nav ul');

navToggle.addEventListener('click', () => {

    nav.classList.toggle('slide');
});




// content
const main = () => {


    const baseUrl = `http://127.0.0.1:8000/api`;

    const getCategory = () => {
        fetch(`${baseUrl}/category`)
            .then(response => {
                return response.json();
            })
            .then(responseJson => {
                if (responseJson.error) {
                    console.log('error')
                } else {
                    renderCategory(responseJson.data);
                }
            })
            .catch((error = "error") => {
                console.log(error);
            })
    }




    const renderCategory = (category) => {
        let elementCategory = document.querySelector('#list-category');

        elementCategory.innerHTML = `<h3>List Category</h3>`;
        category.forEach(category => {
            elementCategory.innerHTML += `
                <div class="list">
                        <ul class="list-group">
                        <li class="list-group-item active" >${category.name}</li>
                      </ul>
                </div>
            `
        });

    }

    getCategory();

}
