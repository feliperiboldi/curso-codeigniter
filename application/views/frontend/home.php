<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <h1 class="page-header">
                Página Inicial -
                <small>Postagens Recentes</small>
            </h1>
            
            <?php foreach ($postagem as $destaque): ?>
            <!-- First Blog Post -->
            <h2>
                <a href="<?= base_url('postagem/'.$destaque->id.'/'.limpar($destaque->titulo)) ?>"><?= $destaque->titulo ?></a>
            </h2>
            <p class="lead">
                por <a href="<?= base_url('postagem/'.$destaque->id.'/'.limpar($destaque->nome)) ?>"><?= $destaque->nome; ?></a>
            </p>
            <p><span class="glyphicon glyphicon-time"></span><?= postadoem($destaque->data) ?></p>
            <hr>
            <img class="img-responsive" src="http://placehold.it/900x300" alt="">
            <hr>
            <p><?= $destaque->subtitulo ?></p>
            <a class="btn btn-primary" href="<?= base_url('postagem/'.$destaque->id.'/'.limpar($destaque->titulo)) ?>">Leia mais <span class="glyphicon glyphicon-chevron-right"></span></a>
            <?php endforeach ?>

            <hr>
        </div>