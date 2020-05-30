const SEARCH = document.getElementById("search");
const FORM  = document.getElementById('search-form');
let counter = 0;
function createNode(element) {
	return document.createElement(element);
}

function append(parent, el) {
  return parent.appendChild(el);
}

const ul = document.getElementById('app');

function enterPress() {
	if(event.keyCode == 13){
		searchFunc();
	}
}

async function searchFunc(){

    try{
        
        const SEARCH_QUERY = document.getElementById("input").value
        const SEARCH_URL = "https://www.googleapis.com/books/v1/volumes?q="
        const API_URL = `${SEARCH_URL}${SEARCH_QUERY}`;

        const res = await fetch(API_URL)
        const data = await res.json();

        document.getElementById("app").innerHTML = "";
    } catch(error) {
		error = createNode('li')
			error.setAttribute("class", "list-group-item");
			error.innerHTML = `<div>
								<span>Sorry there are no results. Try a different search</span>
							</div>
							`;
		append(ul, error);
    } finally{
        return book_list.map(function(new_list) {
			let author_name = new_list.volumeInfo.authors;
            let book_title = new_list.volumeInfo.title;
            let book_link = new_list.volumeInfo.canonicalVolumeLink;
			let book_img = new_list.volumeInfo.imageLinks.thumbnail;
			let book_desc = new_list.volumeInfo.description;
			li = createNode('li');
			li.setAttribute("class", "list-group-item");
			li.innerHTML = `<div class="book-image">
								<a href="${book_img}" target="_blank">
								<img src="${book_img}"></a>
							</div>
							<div class="book-info">
                            	<h2 class="title">${book_title} </h2>
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
			// console.log(book_list);
			counter++;
            append(ul, li);
            
        });
    };

}

document.addEventListener("keyup", enterPress);
SEARCH.addEventListener("click", searchFunc);