<?
 /*
Name: Blog Page
URI: http://tcms.me/
Description: This is the Tentacle default theme.
Author: Tentacle
Version: 1.0
License: GNU General Public License
License URI: license.txt
*/

theme::part('partials/header',array('title'=>'Blog','assets'=>'marketing')); ?>

    <div class="container bump-top posts">
		<?
	// Loop all of the blog posts.
	foreach ($posts as $post): $author_meta = $author->get_meta ( $post->author ); ?>
		<div class="row bump">

            <div class="span8">
                <h1 class="title"><a href="<? _e(BASE_URL.$post->uri) ?>" onClick="ga('send', 'event', 'Post', 'Link', '<? _e($post->title) ?>', 1); mixpanel.track('Content', { 'Link': 'Post', 'version': '<? _e($post->title) ?>' });"><? _e($post->title) ?></a></h1>

                <p>By <? _e($author_meta->first_name.' '.$author_meta->last_name) ?>

                <? if ( count( $category->get_relations( $post->id ) ) ):?>
                    <small> in
                        <? foreach( $category->get_relations( $post->id ) as $relation ): ?>
                            <a href="<?=BASE_URL?>category/<?=$relation->slug ?>"><?_e($relation->name) ?></a>
                        <? endforeach; ?>
                    </small></p>
                <? endif; ?>

                <hr />
            </div>

		</div><!--/row-->
	<? endforeach;?>

    <div class="pagination">
        <ul>
            <? paginate::pages(); ?>
        </ul>
    </div>

</div><!-- /container -->
<? theme::part( 'partials/footer' ); ?>