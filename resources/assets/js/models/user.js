class User {
    constructor(data) {
        this.firstnameKanji = data.firstname_kanji
        this.lastnameKanji = data.lastname_kanji
        this.firstnameKatakana = data.firstname_katakana
        this.lastnameKatakana = data.lastname_katakana
        this.name = data.name
        this.email = data.email
    }

    getFullNameKatakana() {
        return this.lastnameKatakana + ' ' + this.firstnameKatakana
    }

    getFullNameKanji() {
        let fullNameKanji = '';
        let locale = localStorage.getItem('locale');

        if ((this.firstnameKanji || this.lastnameKanji) && locale === 'ja') {
            fullNameKanji = '（' + this.lastnameKanji + ' ' + this.firstnameKanji + '）'
        }

        return fullNameKanji
    }
}

export default User
