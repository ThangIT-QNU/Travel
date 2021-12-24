var onload = function () {
    $("style").html(`
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    .starItem.checked {
        color: yellow;
    }

    .starVote {
        list-style-type: none;
        display: flex;
        align-items: center;
    }

    .starItem {
        font-size: 50px;
        color: gray;
    }
    `)
    
    $("div[id^='vote']").html(
        `<ul class="starVote">
            <li class="starItem checked" value="1" title="Kinh khủng">&#9733;</li>
            <li class="starItem" value="2" title="Tồi">&#9733;</li>
            <li class="starItem" value="3" title="Trung bình">&#9733;</li>
            <li class="starItem" value="4" title="Rất tốt">&#9733;</li>
            <li class="starItem" value="5" title="Tuyệt vời">&#9733;</li>
    </ul>`
    )

    const $$ = document.querySelectorAll.bind(document)
    const $$$ = document.querySelector.bind(document)

    
    $("div[id^='vote']").mouseover(function(){
        
        let starItemsSelector = "#"+this.getAttribute("id") + " .starItem"
        let inputRatingSelector = this.getAttribute("href")
        
    
        let starItems = $$(starItemsSelector)
        let inputRating = $$$(inputRatingSelector)

        
        //xử lí click vào sao
        starItems.forEach(element => {
            element.addEventListener("click", function () {

            var value = element.getAttribute("value")

            inputRating.setAttribute("value", value)


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
    })
    
    

    // //render sao sau khi đã submit
    function renderStar(star,id){
        var htmlStart=""
        if (star > 0){
            // tạo html cho số sao được đánh giá
            for(let i=0; i<star;i++){
                htmlStart +='<li class="starItem checked">&#9733;</li>'
            }
    
            // tạo html cho sao không được đánh giá
            for(let j=star; j<5; j++){
                htmlStart +='<li class="starItem">&#9733;</li>'
            }
        }
        //render sao sau khi đánh giá
        $("#"+id).html(
            `<ul class="starVote">
                ${htmlStart}
            </ul>`
        )
    }

    $$("div[id^='resultVote']").forEach(element =>{
        
        let id = element.getAttribute("id")
        let startnumber = element.getAttribute("value")
        renderStar(startnumber,id)

    })

}