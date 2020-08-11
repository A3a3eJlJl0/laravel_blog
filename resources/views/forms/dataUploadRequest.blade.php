<form method="post" action="">
    @csrf
    <fieldset class="form-group col-3">
        <label class="col-form-label">
            Имя
            <input type="text" class="form-control" name="name" value="">
        </label>
    </fieldset>
    <fieldset class="form-group col-3">
        <label class="col-form-label">
            Телефон
            <input type="tel" class="form-control" name="phone" value="">
        </label>
    </fieldset>
    <fieldset class="form-group col-3">
        <label class="col-form-label">
            E-mail
            <input type="email" class="form-control" name="email" value="">
        </label>
    </fieldset>
    <fieldset class="form-group col-3">
        <label class="col-form-label">
            Ваш запрос
            <textarea name="request"></textarea>
        </label>
    </fieldset>
</form>
