// nav
const navToggle = document.querySelector('.navbar-toggle input');
const nav = document.querySelector('nav ul');

navToggle.addEventListener('click', () => {

    nav.classList.toggle('slide');
});




// content
const main = () => {


    const baseUrl = `http://127.0.0.1:8000/api`;



    // get item

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



    // render item

    const renderCategory = (category) => {
        let elementCategory = document.querySelector('#list-category');

        elementCategory.innerHTML = `<h3><u>List Category</u></h3>`;
        category.forEach(category => {
            elementCategory.innerHTML += `
                <div class="list">
                    <ul class="list-group">
                       
                    <div class="action">
                    <li class="list-group-item active" ><b>${category.name}</b></li>
                    </div>

                        <div class="action">
                        <span type="button" class="button-delete" ><i class="fas fa-minus-circle" id="${category.id}"></i></span> 
                        </div> 
                    </ul>
                             
                </div>
            `
        });

        const buttons = document.querySelectorAll(".button-delete");
        buttons.forEach(button => {
            button.addEventListener("click", event => {
                const categoryId = event.target.id;
                removeCategory(categoryId);
            })
        });

    }



    // insert


    const insertCategory = (category) => {

        fetch(`${baseUrl}/category/tambah`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(category)
            })
            .then(response => {
                return response.json();
            })
            .then(responseJson => {
                console.log(`sucess ${responseJson.message}`);
                getCategory();
            })
            .catch(error => {
                messageError(error);
            })



    }



    document.addEventListener('DOMContentLoaded', () => {
        const buttonSend = document.querySelector('#input-button');
        const inputCategory = document.querySelector('#input-category');

        buttonSend.addEventListener('click', () => {

            const category = {
                name: inputCategory.value
            }

            insertCategory(category);

        });

        getCategory();
    })





    // remove

    const removeCategory = (categoryId) => {

        fetch(`${baseUrl}/category/${categoryId}`, {
                method: 'DELETE',
                headers: {
                    'Content-Type': 'application/json'
                }
            })
            .then(response => {
                return response.json();
            })
            .then(responseJson => {
                messageError(responseJson.message)
                getCategory();
            })
            .catch(error => {
                messageError(error);
            })
    };






    const messageError = (message = 'error') => {
        console.log(message);
    }

    getCategory();

}
