<?php



?>

<div class="container">
    <div class="row">
    
        <div class="col 6">
        
          
            <table> 
                <tr>
                    <th>Nome</th>            
                </tr>
                <?php foreach($courses as $course): ?>
    
                    <tr>
                        <td><?= $course->nome ?></td>
                    </tr>     
                
                <?php endforeach; ?>    
            </table>    
        
        
        </div>
    
    </div>

</div>