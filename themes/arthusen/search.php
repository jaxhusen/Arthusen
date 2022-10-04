<?php
get_header();

get_search_form(); 

if(have_posts()){
    ?>
    <h2>
        Search result:
    </h2>
<?php
    while (have_posts()){
        the_content();
    }
    }else{
        echo '<h2> Ooops.. Try again! </h2>';
    

}
    
    


/*
     endwhile;
    endif; */
    get_footer();