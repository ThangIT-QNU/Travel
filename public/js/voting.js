var onload = function () {
    $("style").html(`
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
   .starItem:hover {
        font-size: 80px;
        color: #ffd700;
        
    }

    .starItem.checked {
        color: #ffd700;
    }

    #starVote {
        height:30px;
        list-style-type: none;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .starItem {
        font-size: 50px;
        color: gray;
    }
    `)
    
    $("#vote").html(
        `<ul id="starVote">
            <li class="starItem checked" value="1" title="Gà quá" >&#9733;</li>
            <li class="starItem" value="2" title="Gà quá">&#9733;</li>
            <li class="starItem" value="3" title="Gà quá" >&#9733;</li>
            <li class="starItem" value="4" title="Gà quá" >&#9733;</li>
            <li class="starItem" value="5" title="Gà quá" >&#9733;</li>
    </ul>`
    )
    const $$ = document.querySelectorAll.bind(document)
    const inputRating = document.querySelector("input[name='rating']")
    var starItems = $$(".starItem")
    var initValue = starItems[0].getAttribute("value")

    // khởi tạo giá trị cho lần đầu tiên load page
    inputRating.setAttribute("value", initValue)

    //xử lí click vào sao
    starItems.forEach(element => {
        element.addEventListener("click", function () {

            var value = element.getAttribute("value")
            inputRating.setAttribute("value", value)
            console.log(value)
            for (let i = 0; i < starItems.length; i++) {
                if (starItems[i].getAttribute("value") <= value) {
                
                    var classList = starItems[i].classList.value

                    if (!classList.includes("checked")) {
                        starItems[i].classList.add("checked")
                    }
                } else {
                    var classList = starItems[i].classList.value
                    if (classList.includes("checked")) {
                        starItems[i].classList.remove("checked")
                    }
                }
            }

        })

    });

    //render sao sau khi đã submit
    // function get(name) {
    //     if (name = (new RegExp('[?&]' + encodeURIComponent(name) + '=([^&]*)')).exec(location.search))
    //         return decodeURIComponent(name[1]);
    // }

    // var star = parseInt(get("rating"))
    // console.log(star);
    // var htmlStart = ""

    // if (star > 0){
        
    //     // tạo html cho số sao được đánh giá
    //     for(let i=0; i<star;i++){
    //         htmlStart +='<li class="starItem checked">&#9733;</li>'
    //     }

    //     // tạo html cho sao không được đánh giá
    //     for(let j=star; j<5; j++){
    //         htmlStart +='<li class="starItem">&#9733;</li>'
    //     }
    // }

    // //render sao sau khi đánh giá
    // $(".resultVote").html(
    //     `<ul id="starVote">
    //         ${htmlStart}
    //     </ul>`
    // )
}