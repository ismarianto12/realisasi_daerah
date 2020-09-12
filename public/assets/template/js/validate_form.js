// File ini berisikan beberapa fungsi javascript untuk validasi form.
// Include file ini di HTML Pages dimana fungsi-fungsi validasi dibutuhkan.

function getAlertMesg(strId) {
    var arrAlertMessages = new Array();
    arrAlertMessages["isNotNull"] = "Harus diisi, tidak boleh kosong";
    arrAlertMessages["isNumeric"] = "Hanya dapat diisi dengan angka";
    arrAlertMessages["isInteger"] = "Hanya dapat diisi dengan angka";
    arrAlertMessages["isFloat"] = "Hanya dapat diisi dengan numeric character";
    arrAlertMessages["isInRange"] = "Hanya dapat diisi dengan angka dalam range yang telah ditentukan";
    arrAlertMessages["isLessThan"] = "Hanya dapat diisi dengan angka yang lebih kecil dari yang telah ditentukan";
    arrAlertMessages["isBiggerThan"] = "Hanya dapat diisi dengan angka yang lebih besar dari  yang telah ditentukan";
    arrAlertMessages["isDate"] = "Isian Tanggal tidak sesuai dengan format";
    arrAlertMessages["isEmail"] = "Isian alamat email tidak sesuai dengan format yang benar";
    return arrAlertMessages[strId];
}

function getFocusToFirstElement() {
    if (document.forms[0] == null) return;
    for (var i = 0; i < document.forms[0].length; i++) {
        if (document.forms[0].elements[i].type != 'hidden') {
            if (!document.forms[0].elements[i].disabled) {
                document.forms[0].elements[i].focus();
                break;
            }
        }
    }
}

// Fungsi untuk melakukan check apakah suatu field dalam kondisi tidak terisi.

function isEmptyString(strValue) {
    var whitespace = " \t\n\r";
    if ((strValue == null) || (strValue.length == 0)) return true;
    for (i = 0; i < strValue.length; i++) {
        var c = strValue.charAt(i);
        if (whitespace.indexOf(c) == -1) return false;
    }
    return true;
}

// Fungsi untuk melakukan check apakah field yang harus terisi,
// telah terisi, jika belum munculkan alert

function isNotNull(objField, nmField)
{
	var strValue = new String(objField.value);
	if (isEmptyString(strValue)) {
		promptAlert('isNotNull', objField, nmField);
		return false;
	}
	return true;
}


function isNumeric(objField, nmField)
{
    var numbers = /^[0-9]+$/;
    if (objField.value.match(numbers)) {
        return true;
    } else {
        promptAlert('isNumeric', objField, nmField);
        return false;
    }
}

// Fungsi untuk melakukan check apakah field terisi hanya dengan number (integer),
// jika tidak tampilkan alert

function isInteger(objField, nmField)
{
	var strValue = new String(objField.value);
    if (isEmptyString(strValue)) return true;

    var strValue = parseInt(objField.value);
    if ( isNaN(strValue) ) {
        promptAlert('isInteger', objField, nmField);
        return false;
    }
	return true;
}


// Fungsi untuk melakukan check apakah field terisi hanya dengan number (float),
// jika tidak tampilkan alert

function isFloat(objField, nmField)
{
	var strValue = new String(objField.value);
    if (isEmptyString(strValue)) return true;

    var strValue = parseFloat(objField.value);
    if ( isNaN(strValue) ) {
        promptAlert('isFloat', objField, nmField);
        return false;
    }
	return true;
}


// Fungsi untuk melakukan check apakah field terisi dengan number dan
// berada dalam range yang telah ditentukan, jika tidak tampilkan alert

function isInRange(objField, nmField, minVal, maxVal)
{
	var strValue = new String(objField.value);
    if (isEmptyString(strValue)) return true;

    if ((objField.value <= minVal) || (objField.value >= maxVal)) {
        format = minVal + ' <= X <= ' + maxVal;
        promptAlert('isInRange', objField, nmField, format);
        return false;
    }
	return true;
}

// Fungsi untuk melakukan check apakah field terisi dengan number dan
// lebih kecil dari nilai yang telah ditentukan, jika tidak tampilkan alert

function isLessThan(objField, nmField, maxVal)
{
	var strValue = new String(objField.value);
    if (isEmptyString(strValue)) return true;

    if ((objField.value > maxVal)) {
        format = ' X <= ' + maxVal;
        promptAlert('isLessThan', objField, nmField, format);
        return false;
    }
	return true;
}


// Fungsi untuk melakukan check apakah field terisi dengan number dan
// lebih besar dari nilai yang telah ditentukan, jika tidak tampilkan alert

function isBiggerThan(objField, nmField, minVal)
{
	var strValue = new String(objField.value);
    if (isEmptyString(strValue)) return true;

    if ((objField.value < minVal)) {
        format = ' X >= ' + minVal;
        promptAlert('isBiggerThan', objField, nmField, format);
        return false;
    }
	return true;
}


// Fungsi untuk melakukan check apakah field terisi dengan alamat email,
// jika tidak tampilkan alert

function isEmail(objField, nmField)
{
    var strEmail = new String(objField.value);
    if (isEmptyString(strEmail)) return true;

    var result = false;
    var theStr = new String(strEmail);
    var index = theStr.indexOf("@");
    if (index > 0) {
        var pindex = theStr.indexOf(".",index);
        if ((pindex > index+1) && (theStr.length > pindex+1)) result = true;
    }
    if (!result) {
        promptAlert("isEmail", objField, nmField);
        return false;
    }
	return true;
}


// Fungsi untuk melakukan check apakah isian tanggal telah terisi dengan benar,
// jika tidak tampilkan alert

function isDate(objField, nmField, format)
{
	var strValue = new String(objField.value);
    if (isEmptyString(strValue)) return true;
    if (format == '') format = 'dd/mm/yyyy';

    var result = true;
    var dateElements = objField.value.split("/");
    result = (dateElements.length == 3);
    if (!result) {
        promptAlert('isDate', objField, nmField, format);
        return result;
    }

    if (format == 'dd/mm/yyyy') {
        var day = parseInt(dateElements[0], 10);
        var month = parseInt(dateElements[1], 10);
        var year = (dateElements[2]);
    } else if (format == 'mm/dd/yyyy') {
        var month = parseInt(dateElements[0], 10);
        var day = parseInt(dateElements[1], 10);
        var year = (dateElements[2]);
    } else if (format == 'yyyy/mm/dd') {
        var year = parseInt(dateElements[0], 10);
        var month = parseInt(dateElements[1], 10);
        var day = (dateElements[2]);
    }

    result = !isNaN(month) && (month > 0) && (month < 13) &&
            !isNaN(day) && (day > 0) && (day < 32) &&
            !isNaN(year) && (year.length == 4);
    if (!result) {
        promptAlert('isDate', objField, nmField, format);
        return result;
    }

    if (month == 2) {
        if ((year % 4 == 0 && year % 100 != 0) || year % 400 == 0) {
            result = (day < 30);
        } else {
            result = (day < 29);
        }
    } else {
        if (month == 4 || month == 6 || month == 9 || month == 11) {
            result = (day < 31);
        } else {
            result = (day < 32);
        }
    }
    if (!result) {
        promptAlert('isDate', objField, nmField, format);
        return result;
    }
    return result;
}

// Fungsi untuk menampilkan error alert

function promptAlert(nmAlert, objField, nmField, format)
{
    var msg = getAlertMesg(nmAlert);
    if (!isEmptyString(format)) {
        msg += 'Format Isian : ' + format;
    }
    alert('ERROR Field ' + nmField + ' : ' + msg);
    objField.value = '';
    objField.focus();
    return false;
}