<section>

    <br><a href="index.php?url=Admin/Ajouter" class="btn btn-success "> Ajouter Eleve </a><br>

    <table class="table table-striped table-black">
        <thead class="table-dark">
            <tr>
                <th scope="col"> Photo</th>
                <th scope="col">ID</th>
                <th scope="col">CNE </th>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Adresse</th>
                <th scope="col">Ville</th>
                <th scope="col">email</th>
                <th colspan="2"> Action

                </th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($data as $etu) : ?>
                <tr scope="row">
                    <td scope="col"> <img src="../Views/<?php echo $etu['Photo']; ?>" </td>
                    <td scope="col"> <b><?php echo $etu['id']; ?></b> </td>
                    <td scope="col"> <b><?php echo $etu['CNE']; ?></b> </td>
                    <td scope="col"> <b><?php echo $etu['Nom']; ?></b> </td>
                    <td scope="col"> <b><?php echo $etu['Prenom']; ?> </b></td>
                    <td scope="col"> <b><?php echo $etu['Adresse']; ?></b> </td>
                    <td scope="col"> <b><?php echo $etu['Ville']; ?></b> </td>
                    <td scope="col"> <b><?php echo $etu['Email']; ?> </b></td>
                    <td>
                        <a href="index.php?url=Admin/Modifier/<?= $etu['id'] ?>" class="btn btn-info btn-sm"> Modifier </a>
                        <a href="index.php?url=Admin/Delete/<?= $etu['id'] ?>" class="btn btn-danger btn-sm"> Delete </a>
                    </td>
                </tr>;
            <?php endforeach; ?>
            ?>
        </tbody>
    </table>

</section>