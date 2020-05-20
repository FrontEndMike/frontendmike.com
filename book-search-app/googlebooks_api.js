// FETCH!
// hit url and it returns some informtation
// primary method is grab data from an api


const SEARCH = document.getElementById("search");
let counter = 0;
function createNode(element) {
	return document.createElement(element);
}

function append(parent, el) {
  return parent.appendChild(el);
}

const ul = document.getElementById('app');



function searchFunc() {
	// Take in input value from html
	// Variables had to be declared within function to work
	const SEARCH_QUERY = document.getElementById("input").value
    const API_URL = `https://www.googleapis.com/books/v1/volumes?q=${SEARCH_QUERY}`;
    // const API_URL = `https://www.googleapis.com/books/v1/volumes?q=javascript`;
	fetch(API_URL)
	.then(res => {
		return res.json();
	})
	.then(function(data) {
		// Objects, {}, in JavaScript does not have the method .map(), 
		// it's only for Arrays, [].
		// So in order for your code to work change data.map() 
		// to data.products.map() 
        // since items is an array which you can iterate upon.
		//.slice to limit .map results
		document.getElementById("app").innerHTML = "";
		let book_list = data.items.slice(0, 10); 
		return book_list.map(function(new_list) {
			let author_name = new_list.volumeInfo.authors;
            let book_title = new_list.volumeInfo.title;
            let book_link = new_list.volumeInfo.canonicalVolumeLink;
			let book_img = new_list.volumeInfo.imageLinks.thumbnail;
			let book_desc = new_list.volumeInfo.description;
			li = createNode('li')
			li.setAttribute("class", "list-group-item");
			li.innerHTML = `<div class="book-image">
								<a href="${book_link}" target="_blank">
								<img src="${book_img}"></a>
							</div>
							<div class="book-info">
                            	<h3 class="title">${book_title} </h3>
								<p class="aurthor"> Author : ${author_name} </p>
								<a href="${book_link}" target="_blank" class="btn btn-primary">
								<i class="fas fa-dollar-sign"></i> Purchase
								</a>
								<p class="description-btn">
								<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample${counter}" aria-expanded="false" aria-controls="multiCollapseExample${counter}">
								<i class="fas fa-align-left"></i> Description
								</button>
								</p>
								<div class="row">
								<div class="col">
									<div class="collapse multi-collapse" id="multiCollapseExample${counter}">
									<div class="card card-body">
										${book_desc}
									</div>
									</div>
								</div>
								</div>
							</div>
							`;
			counter++;
			append(ul, li);
        }) 
	})
	.catch(error => {
		console.log(error);
});
}


SEARCH.addEventListener("click", searchFunc);
