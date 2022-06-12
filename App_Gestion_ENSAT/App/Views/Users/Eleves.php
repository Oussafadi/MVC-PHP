<section>

    <table class="table table-striped table-secondary">
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
                </tr>;
            <?php endforeach; ?>
            ?>
        </tbody>
    </table>

</section>