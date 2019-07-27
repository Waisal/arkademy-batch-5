function Biodata() {
    let biodata = {
        name: 'Waisal Riyanto Saputra',
        age: 17,
        address: 'Villa Gading Harapan Blok Aj 8 No 23',
        hobbies: ['ngoding', 'desain', 'nonton film'],
        is_merried: false,
        list_school: [{
            name: 'SMK TARUNA BANGSA BEKASI',
            year_in: '2016',
            year_out: '2019',
            major: null
        }, {
            name: 'SMP NEGERI 2 BABELAN',
            year_in: '2013',
            year_out: '2016',
            major: null
        }, {
            name: 'SDN BABELAN KOTA 06',
            year_in: '2007',
            year_out: '2013',
            major: null
        }],
        skills: [{
            skill_name: 'HTML',
            level: 'advanced'
        }, {
            skill_name: 'PHP',
            level: 'beginner'
        }, {
            skill_name: 'Bootstrap',
            level: 'beginner'
        }, {
            skill_name: 'CSS',
            level: 'beginner'
        }, {
            skill_name: 'JavaScript',
            level: 'beginner'

        }, {
            skill_name: 'CodeIgniter',
            level: 'beginner'
        }],
        interest_in_coding: true
    }
    return JSON.stringify(biodata);
}