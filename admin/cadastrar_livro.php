<?php
$pageInfo = array(
    'title' => 'Criar novo Livro',
    'description' => 'Crie uma novo Livro para compartilhar com seus leitores.',
    'pageName' => 'new_post',
);

include_once('../components/admin/header.php');
?>

<!-- Conteúdo do dashboard -->
<main class="container py-5">
    <div class="row">
        <!-- Sidebar do dashboard -->
        <div class="col-md-3">
            <?php
                include_once('../components/admin/menu_sidebar.php');
            ?>
        </div>
        <!-- Main do dashboard -->
        <section class="col-md-9">
            <h2><?= $pageInfo['title'] ?></h2>
            <p><?= $pageInfo['description'] ?></p>
            <hr>
            <div class="card">
                <div class="card-body">
                    <?php if(isset($_SESSION['message'])){ ?>
                        <div class="alert alert-<?= $_SESSION['message_type'] ?>" role="alert">
                            <?php echo $_SESSION['message']; ?>
                        </div>
                    <?php unset($_SESSION['message']); } ?>
                    <form action="requests/request_create_post.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="title">Título da Livro</label>
                            <input type="text" class="form-control" id="title" name="title"
                                placeholder="Insira o título da Livro">
                        </div>
                        <div class="form-group">
                            <label for="content">Conteúdo da Livro</label>
                            <textarea class="form-control" id="content" name="content" rows="6"
                                placeholder="Escreva o conteúdo da Livro"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="price">Preço</label>
                            <input type="number" class="form-control" id="price" name="price"
                                placeholder="Ex: 22">
                        </div>
                        <div class="form-group">
                            <label for="image">Imagem da Livro</label>
                            <input type="file" class="form-control-file" id="image" name="image" accept="image/*">
                        </div>
                        <button type="submit" class="btn btn-primary">Publicar</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</main>

<?php
$currentPage = 'new_post';
include_once('../components/admin/footer.php');
?>