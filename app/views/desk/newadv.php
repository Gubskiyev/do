<div align="center" class="panel-title">Создание нового объявления</div>
<form role="form" action="/desk/newadv/" method="post" name="newadv">
<table border="0" align="center">
    <tr>
        <td>
            <input class="form-control" type="text" name="title" placeholder="Заголовок" required>
        </td>
        <td rowspan="6"><textarea rows="10" class="form-control" name="text" placeholder="Ваш текст"></textarea></td>
    </tr>
    <tr>
        <td>
            <select class="form-control" name="type" required>
                <option selected disabled>Выберете тип</option>
                <option value="1">Купить</option>
                <option value="2">Продать</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>
            <select class="form-control" name="category" required>
                <option selected disabled>Выберете категорию</option>
                <option value="1">Авто</option>
                <option value="2">Недвижимость</option>
            </select>
        </td>
    </tr>

    <tr>
        <td>
            <span>Фотография товара</span>
            <input  type="file" name="img">
        </td>
    </tr>
    <tr>
        <td>
            <input class="form-control" type="text" name="creator" placeholder="Ваше имя" required>
        </td>
    </tr>
    <tr>
        <td>
            <input class="form-control" type="tel" name="tel" placeholder="+79241234567" value="+7" required>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <div align="center">
            <input class="btn btn-success" type="submit" name="newadv" value="Добавить объявление">
            </div>
        </td>
    </tr>
</table>
</form>