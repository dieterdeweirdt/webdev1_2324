<h1><?= $movie->title; ?></h1>
<?= $movie->description; ?>

<div class="comments">

<form>
    <textarea name="message"></textarea>
    <button>Post comment</button>
</form>

<?php foreach ($comments as $comment) {
    include '_partial/comment.php';
} ?>

</div>

<button id="load-comments">Load more comments</button>

<script>

   function scrollListener() {
        if(window.scrollY > 100) {
            //document.querySelector('.comments').classList.add('sticky');
            loadComments();
        } 
    }

    window.addEventListener('scroll', scrollListener);
    let page = 1;
    function loadComments() {
        fetch('/api/movie/<?= $movie->movie_id; ?>/comments/' + page)
            .then(response => response.json())
            .then((data) => {
                for(let i = 0; i < data.length; i++) {
                    console.log(data[i]);
                    let commentElement = document.createElement('div');
                    commentElement.innerHTML = data[i].message;
                    document.querySelector('.comments').appendChild(commentElement);
                }
                
            });
   }
     

    
    /*document.querySelector('#load-comments').addEventListener('click', function() {
        page++;
        fetch('/api/movie/<?= $movie->movie_id; ?>/comments/' + page)
            .then(response => response.json())
            .then((data) => {
                for(let i = 0; i < data.length; i++) {
                    console.log(data[i]);
                    let commentElement = document.createElement('div');
                    commentElement.innerHTML = data[i].message;
                    document.querySelector('.comments').appendChild(commentElement);
                }
                
            });

    });*/


</script>