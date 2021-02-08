<!doctype html>
<html lang="en">
  <head>
    <title> UP Seba Seting Change </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
    <div class="container mt-5">
      <form action="" method="post">
        <div class="row">


            <div class="col-md-3">
                <div class="form-group">
                  <label for="">UP English Name</label>
                  <input type="text" readonly class="form-control readonly" name="" id="" aria-describedby="helpId" value="<?= $settings['up_name_en']; ?>" placeholder="">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                  <label for="">UP Bangla Name</label>
                  <input type="text" readonly class="form-control readonly" name="" id="" aria-describedby="helpId" value="<?= $settings['up_name_bn']; ?>" placeholder="">
                </div>
            </div>            
            <div class="col-md-3">
                <div class="form-group">
                  <label for="">UP Address</label>
                  <input type="text" readonly class="form-control readonly" name="" id="" aria-describedby="helpId" value="<?= $settings['address']; ?>" placeholder="">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                  <label for="">UP Bangla Address</label>
                  <input type="text" readonly class="form-control readonly" name="" id="" aria-describedby="helpId" value="<?= $settings['bn_address']; ?>" placeholder="">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                  <label for="">UP Chairman English Name</label>
                  <input type="text" readonly class="form-control readonly" name="" id="" aria-describedby="helpId" value="<?= $settings['chairman']; ?>" placeholder="">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                  <label for="">UP Chairman Bangla Name</label>
                  <input type="text" readonly class="form-control readonly" name="" id="" aria-describedby="helpId" value="<?= $settings['chairman_bn_name']; ?>" placeholder="">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                  <label for="">UP Mobile</label>
                  <input type="text" readonly class="form-control readonly" name="" id="" aria-describedby="helpId" value="<?= $settings['mobile']; ?>" placeholder="">
                </div>
            </div>
            <div class="col-md-3 div_list" style="display:none">
              <div class="form-group">
                <label for=""></label>
                <select class="form-control" name="" id="">
                  <option> Select </option>
                  <?php foreach ($all_div as $div) { ?> 
                  <option value="<?= $div['div_id']; ?>" <?php if ($div['div_id'] == $settings['div_a_idd']) {
                    echo 'selected';
                  } ?>><?= $div['div_bn_name']; ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <div class="col-md-3 dist_list">
            </div>
            <div class="col-md-3 up_list">
            </div>
            <div class="col-md-3 un_list">
            </div>

        </div>

        <div class="text-center mt-3" >
          <?= $settings['div_bn_name']; ?> ==> <?= $settings['dist_bn_name']; ?> ==> <?= $settings['up_bn_name']; ?> ==> <?= $settings['un_bn_name']; ?>
        </div>

        <div class="mt-3">
          <button type="button" class="btn btn-primary btn-lg mt-3 editable_btn"> Edit </button>
          <button type="submit" style="display:none" class="btn btn-primary btn-lg mt-3 save_btn"> Update </button>
        </div>
      </form>
    </div>


<!-- 
 -->


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    


    <!-- Optional JavaScript -->

    <script>
      var editable_btn = document.querySelector('.editable_btn');
      var readonly = document.querySelectorAll('.readonly');
      var save_btn = document.querySelector('.save_btn');

      
      var div_list = document.querySelector('.div_list');
      var dist_list = document.querySelector('.dist_list');
      var up_list = document.querySelector('.up_list');
      var up_list = document.querySelector('.up_list');


      editable_btn.addEventListener('click', (e) => {
        e.preventDefault();
        
        for (let l = 0; l < readonly.length; l++) {
          readonly[l].removeAttribute('readonly');
        }

        div_list.style.display = "block";
        editable_btn.style.display = "none";
        save_btn.style.display = "block";

        // editable_btn.classList.add('save_btn');
        // editable_btn.innerText = 'Update';
        // editable_btn.type = 'submit';
       })


       div_list.addEventListener('change', (event) => {
         let div_id = event.target.value;
         getDistList(div_id);
       })
       
       dist_list.addEventListener('change', (event) => {
         let dist_id = event.target.value;
         getUpList(up_id);
       })
       
       up_list.addEventListener('change', (event) => {
         let up_id = event.target.value;
         getunList(div_id);
       })
       
       un_list.addEventListener('change', (event) => {
         let un_id = event.target.value;
         getDistList(div_id);
       })




       function getDistList(div_id) {
        const query = `getdistlist/${div_id}`;
        fetch(query)
          .then(res => res.json())
          .then(data => {

            let dist_htmtl_data = '';
            for (let a = 0; a < data.length; a++) {
              dist_htmtl_data += `<option value="${data[a].dist_id}" >${data[a].dist_bn_name}</option>`;           
            }

            dist_list.innerHTML = 
                  `<div class="form-group">
                    <label for=""></label>
                    <select class="form-control" name="" id="">
                      <option> Select </option>
                      '${dist_htmtl_data}'
                    </select>
                  </div>`;

          })
       }








       /**
        
              <div class="form-group">
                <label for=""></label>
                <select class="form-control" name="" id="">
                  <option> Select </option>
                  
                </select>
              </div>
        */



    // const div_id = document.querySelector('.div_list').value;
    // const query = `https://www.themealdb.com/api/json/v1/1/search.php?f=${searchQuery}`;

    // fetch(query)
    //     .then(res => res.json())
    //     .then(data => getFood(data))




    // const getFood = data => {
    //     let food = '';
    //     for (let i = 0; i < data.meals.length; i++) {
    //         food +=
    //             `<div class="col-sm-3 mb-3">
    //                 <div class="card">
    //                 <img src="${data.meals[i].strMealThumb}" class="card-img-top">
    //                     <div class=" card-body">
    //                         <h5 class="card-title">${data.meals[i].strMeal}</h5>
    //                         <button onclick="showMealDetails('${data.meals[i].idMeal}');" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">Details</button>
    //                     </div>
    //                 </div> 
    //             </div>`;
    //     }

    //     mealsContainer.innerHTML = food;
    // }




    </script>

  </body>
</html>