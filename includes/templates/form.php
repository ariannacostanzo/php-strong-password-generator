<form class="password-container" action="" method="GET">
            
    <!-- lunghezza password -->
    <div class="d-flex align-items-center justify-content-between my-4">
        <label for="length">Lunghezza password:</label>
        <input type="number" class="form-input" id="length" name="length" value="<?= $length ?>">
    </div>
    <!-- ripetizione -->
    <div class="d-flex align-items-center justify-content-between my-4">
        <label>Consenti ripetizioni di uno o più caratteri: </label>
        <div class="d-flex align-items-center gap-2">
            <label for="rep-yes">Si</label>
            <input type="radio" value="yes" id="rep-yes" name="repetition" <?= $repeat === 'yes' ? 'checked' : '' ?>>
            <label for="rep-no">No</label>
            <input type="radio" value="no" id="rep-no" name="repetition" <?= $repeat === 'no' ? 'checked' : '' ?>>
        </div>
    </div>
    <!-- caratteri -->
    <div class="d-flex align-items-center justify-content-between my-4">
        <label>Scegli che tipo di caratteri vuoi: </label>
        <div class="d-flex flex-column align-items-center gap-2">
            <div>
                <label for="letters">Lettere</label>
                <input type="checkbox" id="letters" name="letters" >
            </div>
            <div>
                <label for="numbers">Numeri</label>
                <input type="checkbox" id="numbers" name="numbers">
            </div>
            <div>
                <label for="symbols">Simboli</label>
                <input type="checkbox" id="symbols" name="symbols">
            </div>
        </div>
    </div>
    
    <div class="buttons-container">
        <button type="submit" class="btn btn-primary">Invia</button>
        <button type="button" class="btn btn-secondary">Annulla</button>
    </div>
</form>