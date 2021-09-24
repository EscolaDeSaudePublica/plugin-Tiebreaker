<div>
    <form action="<?php echo $app->createUrl('desempate/gerarPdf'); ?>" method="POST" target="TargetWindow">
        <hr>
        <label class="label">Filtrar Relatório</label>
        <select name="selectRel" id="selectRel" class="" style="margin-left: 10px;">
            <option value="0">--Selecione--</option>
            <option value="1">Relação de Inscritos</option>
            <?php if ($resource) : ?>
                <option value="2">Resultados preliminares</option>
            <?php endif; ?>
            <option value="3">Resultados definitivos</option>
            <option value="4">Relação de contatos</option>
        </select>
        <input type="hidden" id="idopportunityReport" name="idopportunityReport">
</div>
<?php
$this->part('tiebreaker/tiebreaker');
?>
<button type="submit" id="btnGenerateReport">Gerar Relatório <i class="fa fa-file-pdf-o" aria-hidden="true"></i></button>
</form>
<div>