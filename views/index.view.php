<?php require ('partials/header.php'); ?>



<h1>Submit Your Name</h1>
<form method="POST" action="/names">
    <input name="name"></input>
    <button type="submit" id="add_btn">Submit</button>
</form>

<hr>

<ul id="liveData">
    <?php foreach ($users as $user) : ?>
    <li>
        <?= $user->name; ?>
    </li>
    <?php endforeach; ?>
</ul>



<script>

 $(document).ready(function(){

    function fetch_data()
    {
        $.ajax({

            url: "index.php",
            method: "POST",
            success:function(data){
                $('#liveData').html(data);
            }

        });

    }
    // fetch_data();
    // $(document).on('click', '#add_btn',)

 });
</script>


<?php require ('partials/footer.php'); ?>
