function is_valid_username(username) {
    if (username == undefined) {
        return false;
    } else {
        let patt = /^[a-z]{3}[0-9a-z]{2,6}$/i;
        let user = username;
        let hasil = patt.test(user);
        return 'username ' + username + ' = ' + hasil;
    }
}