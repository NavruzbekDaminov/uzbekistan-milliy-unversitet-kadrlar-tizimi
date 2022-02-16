const regions = [
  {
    id: "0",
    region_uz: ""
  },
  {
    id: "Toshkent shahri",
    region_uz: "Toshkent shahri"
  },
  {
    id: "Qoraqalpog'iston Respublikasi",
    region_uz: "Qoraqalpog'iston Respublikasi"
  },
  {
    id: "Andijon viloyati",
    region_uz: "Andijon viloyati",
  },
  {
    id: "Buxoro viloyati",
    region_uz: "Buxoro viloyati",
  },
  {
    id: "Jizzax viloyati",
    region_uz: "Jizzax viloyati",
  },
  {
    id: "Qashqadaryo viloyati",
    region_uz: "Qashqadaryo viloyati",
  },
  {
    id: "Navoiy viloyati",
    region_uz: "Navoiy viloyati",
  },
  {
    id: "Namangan viloyati",
    region_uz: "Namangan viloyati",
  },
  {
    id: "Samarqand viloyati",
    region_uz: "Samarqand viloyati",
  },
  {
    id: "Surxandaryo viloyati",
    region_uz: "Surxandaryo viloyati"
  },
  {
    id: "Sirdaryo viloyati",
    region_uz: "Sirdaryo viloyati"
  },
  {
    id: "Toshkent viloyati",
    region_uz: "Toshkent viloyati"
  },
  {
    id: "Farg\'ona viloyati",
    region_uz: "Farg\'ona viloyati"
  },
  {
    id: "Xorazm viloyati",
    region_uz: "Xorazm viloyati"
  },
]

const districts = [
  {
    id: "Amudaryo tumani",
    region_id: "Qoraqalpog'iston Respublikasi",
    region_uz: "Amudaryo tumani"
  },
  {
    id: "Beruniy tumani",
    region_id: "Qoraqalpog'iston Respublikasi",
    region_uz: "Beruniy tumani"
  },
  {
    id: "Kegayli tumani",
    region_id: "Qoraqalpog'iston Respublikasi",
    region_uz: "Kegayli tumani"
  },
  {
    id: "Qonliko\'l tumani",
    region_id: "Qoraqalpog'iston Respublikasi",
    region_uz: "Qonliko\'l tumani"
  },
  {
    id: "Qorao\'zak tumani",
    region_id: "Qoraqalpog'iston Respublikasi",
    region_uz: "Qorao\'zak tumani"
  },
  {
    id: "Qo\'ng\'irot tumani",
    region_id: "Qoraqalpog'iston Respublikasi",
    region_uz: "Qo\'ng\'irot tumani"
  },
  {
    id: "Mo\'ynoq tumani",
    region_id: "Qoraqalpog'iston Respublikasi",
    region_uz: "Mo\'ynoq tumani"
  },
  {
    id: "Nukus tumani",
    region_id: "Qoraqalpog'iston Respublikasi",
    region_uz: "Nukus tumani"
  },
  {
    id: "Nukus shahri",
    region_id: "Qoraqalpog'iston Respublikasi",
    region_uz: "Nukus shahri"
  },
  {
    id: "Taxtako\'pir tumani",
    region_id: "Qoraqalpog'iston Respublikasi",
    region_uz: "Taxtako\'pir tumani"
  },
  {
    id: "To\'rtko\'l tumani",
    region_id: "Qoraqalpog'iston Respublikasi",
    region_uz: "To\'rtko\'l tumani"
  },
  {
    id: "Xo\'jayli tumani",
    region_id: "Qoraqalpog'iston Respublikasi",
    region_uz: "Xo\'jayli tumani"
  },
  {
    id: "Chimboy tumani",
    region_id: "Qoraqalpog'iston Respublikasi",
    region_uz: "Chimboy tumani"
  },
  {
    id: "Shumanay tumani",
    region_id: "Qoraqalpog'iston Respublikasi",
    region_uz: "Shumanay tumani"
  },
  {
    id: "Ellikqal\'a tumani",
    region_id: "Qoraqalpog'iston Respublikasi",
    region_uz: "Ellikqal\'a tumani"
  },
  {
    id: "Andijon shahri",
    region_id: "Andijon viloyati",
    region_uz: "Andijon shahri"
  },
  {
    id: "Andijon tumani",
    region_id: "Andijon viloyati",
    region_uz: "Andijon tumani"
  },
  {
    id: "Asaka tumani",
    region_id: "Andijon viloyati",
    region_uz: "Asaka tumani"
  },
  {
    id: "Baliqchi tumani",
    region_id: "Andijon viloyati",
    region_uz: "Baliqchi tumani"
  },
  {
    id: "Buloqboshi tumani",
    region_id: "Andijon viloyati",
    region_uz: "Buloqboshi tumani"
  },
  {
    id: "Bo\'z tumani",
    region_id: "Andijon viloyati",
    region_uz: "Bo\'z tumani"
  },
  {
    id: "Jalaquduq tumani",
    region_id: "Andijon viloyati",
    region_uz: "Jalaquduq tumani"
  },
  {
    id: "Izbosgan tumani",
    region_id: "Andijon viloyati",
    region_uz: "Izbosgan tumani"
  },
  {
    id: "Qorasuv shahri",
    region_id: "Andijon viloyati",
    region_uz: "Qorasuv shahri"
  },
  {
    id: "Qo\'rg\'ontepa tumani",
    region_id: "Andijon viloyati",
    region_uz: "Qo\'rg\'ontepa tumani"
  },
  {
    id: "Marhamat tumani",
    region_id: "Andijon viloyati",
    region_uz: "Marhamat tumani"
  },
  {
    id: "Oltinko\'l tumani",
    region_id: "Andijon viloyati",
    region_uz: "Oltinko\'l tumani"
  },
  {
    id: "Paxtaobod tumani",
    region_id: "Andijon viloyati",
    region_uz: "Paxtaobod tumani"
  },
  {
    id: "Ulug\'nor tumani",
    region_id: "Andijon viloyati",
    region_uz: "Ulug\'nor tumani"
  },
  {
    id: "Xonabod tumani",
    region_id: "Andijon viloyati",
    region_uz: "Xonabod tumani"
  },
  {
    id: "Xo\'jaobod tumani",
    region_id: "Andijon viloyati",
    region_uz: "Xo\'jaobod tumani"
  },
  {
    id: "Shahrixon tumani",
    region_id: "Andijon viloyati",
    region_uz: "Shahrixon tumani"
  },
  {
    id: "Buxoro shahri",
    region_id: "Buxoro viloyati",
    region_uz: "Buxoro shahri"
  },
  {
    id: "Buxoro tumani",
    region_id: "Buxoro viloyati",
    region_uz: "Buxoro tumani"
  },
  {
    id: "Vobkent tumani",
    region_id: "Buxoro viloyati",
    region_uz: "Vobkent tumani"
  },
  {
    id: "G\'ijduvon tumani",
    region_id: "Buxoro viloyati",
    region_uz: "G\'ijduvon tumani"
  },
  {
    id: "Jondor tumani",
    region_id: "Buxoro viloyati",
    region_uz: "Jondor tumani"
  },
  {
    id: "Kogon tumani",
    region_id: "Buxoro viloyati",
    region_uz: "Kogon tumani"
  },
  {
    id: "Kogon shahri",
    region_id: "Buxoro viloyati",
    region_uz: "Kogon shahri"
  },
  {
    id: "Qorako\'l tumani",
    region_id: "Buxoro viloyati",
    region_uz: "Qorako\'l tumani"
  },
  {
    id: "Qorovulbozor tumani",
    region_id: "Buxoro viloyati",
    region_uz: "Qorovulbozor tumani"
  },
  {
    id: "Olot tumani",
    region_id: "Buxoro viloyati",
    region_uz: "Olot tumani"
  },
  {
    id: "Peshku tumani",
    region_id: "Buxoro viloyati",
    region_uz: "Peshku tumani"
  },
  {
    id: "Romitan tumani",
    region_id: "Buxoro viloyati",
    region_uz: "Romitan tumani"
  },
  {
    id: "Shofirkon tumani",
    region_id: "Buxoro viloyati",
    region_uz: "Shofirkon tumani"
  },
  {
    id: "Arnasoy tumani",
    region_id: "Jizzax viloyati",
    region_uz: "Arnasoy tumani"
  },
  {
    id: "Baxmal tumani",
    region_id: "Jizzax viloyati",
    region_uz: "Baxmal tumani"
  },
  {
    id: "G\'allaorol tumani",
    region_id: "Jizzax viloyati",
    region_uz: "G\'allaorol tumani"
  },
  {
    id: "Do\'stlik tumani",
    region_id: "Jizzax viloyati",
    region_uz: "Do\'stlik tumani"
  },
  {
    id: "Sh.Rashidov tumani",
    region_id: "Jizzax viloyati",
    region_uz: "Sh.Rashidov tumani"
  },
  {
    id: "Jizzax shahri",
    region_id: "Jizzax viloyati",
    region_uz: "Jizzax shahri"
  },
  {
    id: "Zarbdor tumani",
    region_id: "Jizzax viloyati",
    region_uz: "Zarbdor tumani"
  },
  {
    id: "Zafarobod tumani",
    region_id: "Jizzax viloyati",
    region_uz: "Zafarobod tumani"
  },
  {
    id: "Zomin tumani",
    region_id: "Jizzax viloyati",
    region_uz: "Zomin tumani"
  },
  {
    id: "Mirzacho\'l tumani",
    region_id: "Jizzax viloyati",
    region_uz: "Mirzacho\'l tumani"
  },
  {
    id: "Paxtakor tumani",
    region_id: "Jizzax viloyati",
    region_uz: "Paxtakor tumani"
  },
  {
    id: "Forish tumani",
    region_id: "Jizzax viloyati",
    region_uz: "Forish tumani"
  },
  {
    id: "Yangiobod tumani",
    region_id: "Jizzax viloyati",
    region_uz: "Yangiobod tumani"
  },
  {
    id: "G\'uzor tumani",
    region_id: "Qashqadaryo viloyati",
    region_uz: "G\'uzor tumani",
  },
  {
    id: "Dehqonobod tumani",
    region_id: "Qashqadaryo viloyati",
    region_uz: "Dehqonobod tumani",
  },
  {
    id: "Qamashi tumani",
    region_id: "Qashqadaryo viloyati",
    region_uz: "Qamashi tumani",
  },
  {
    id: "Qarshi tumani",
    region_id: "Qashqadaryo viloyati",
    region_uz: "Qarshi tumani",
  },
  {
    id: "Qarshi shahri",
    region_id: "Qashqadaryo viloyati",
    region_uz: "Qarshi shahri",
  },
  {
    id: "Kasbi tumani",
    region_id: "Qashqadaryo viloyati",
    region_uz: "Kasbi tumani",
  },
  {
    id: "Kitob tumani",
    region_id: "Qashqadaryo viloyati",
    region_uz: "Kitob tumani",
  },
  {
    id: "Koson tumani",
    region_id: "Qashqadaryo viloyati",
    region_uz: "Koson tumani",
  },
  {
    id: "Mirishkor tumani",
    region_id: "Qashqadaryo viloyati",
    region_uz: "Mirishkor tumani",
  },
  {
    id: "Muborak tumani",
    region_id: "Qashqadaryo viloyati",
    region_uz: "Muborak tumani",
  },
  {
    id: "Nishon tumani",
    region_id: "Qashqadaryo viloyati",
    region_uz: "Nishon tumani",
  },
  {
    id: "Chiroqchi tumani",
    region_id: "Qashqadaryo viloyati",
    region_uz: "Chiroqchi tumani",
  },
  {
    id: "Shahrisabz tumani",
    region_id: "Qashqadaryo viloyati",
    region_uz: "Shahrisabz tumani",
  },
  {
    id: "Yakkabog\' tumani",
    region_id: "Qashqadaryo viloyati",
    region_uz: "Yakkabog\' tumani",
  },
  {
    id: "Zarafshon shahri",
    region_id: "Navoiy viloyati",
    region_uz: "Zarafshon shahri",
  },
  {
    id: "Karman tumani",
    region_id: "Navoiy viloyati",
    region_uz: "Karman tumani",
  },
  {
    id: "Qiziltepa tumani",
    region_id: "Navoiy viloyati",
    region_uz: "Qiziltepa tumani",
  },
  {
    id: "Konimex tumani",
    region_id: "Navoiy viloyati",
    region_uz: "Konimex tumani",
  },
  {
    id: "Navbahor tumani",
    region_id: "Navoiy viloyati",
    region_uz: "Navbahor tumani",
  },
  {
    id: "Navoiy shahri",
    region_id: "Navoiy viloyati",
    region_uz: "Navoiy shahri",
  },
  {
    id: "Nurota tumani",
    region_id: "Navoiy viloyati",
    region_uz: "Nurota tumani",
  },
  {
    id: "Tomdi tumani",
    region_id: "Navoiy viloyati",
    region_uz: "Tomdi tumani",
  },
  {
    id: "Uchquduq tumani",
    region_id: "Navoiy viloyati",
    region_uz: "Uchquduq tumani",
  },
  {
    id: "Xatirchi tumani",
    region_id: "Navoiy viloyati",
    region_uz: "Xatirchi tumani",
  },
  {
    id: "Kosonsoy tumani",
    region_id: "Namangan viloyati",
    region_uz: "Kosonsoy tumani",
  },
  {
    id: "Mingbuloq tumani",
    region_id: "Namangan viloyati",
    region_uz: "Mingbuloq tumani",
  },
  {
    id: "Namangan tumani",
    region_id: "Namangan viloyati",
    region_uz: "Namangan tumani",
  },
  {
    id: "Namangan shahri",
    region_id: "Namangan viloyati",
    region_uz: "Namangan shahri",
  },
  {
    id: "Norin tumani",
    region_id: "Namangan viloyati",
    region_uz: "Norin tumani",
  },
  {
    id: "Pop tumani",
    region_id: "Namangan viloyati",
    region_uz: "Pop tumani",
  },
  {
    id: "To\'raqo\'rg\'on tumani",
    region_id: "Namangan viloyati",
    region_uz: "To\'raqo\'rg\'on tumani",
  },
  {
    id: "Uychi tumani",
    region_id: "Namangan viloyati",
    region_uz: "Uychi tumani",
  },
  {
    id: "Uchqo\'rg\'on tumani",
    region_id: "Namangan viloyati",
    region_uz: "Uchqo\'rg\'on tumani",
  },
  {
    id: "Chortoq tumani",
    region_id: "Namangan viloyati",
    region_uz: "Chortoq tumani",
  },
  {
    id: "Chust tumani",
    region_id: "Namangan viloyati",
    region_uz: "Chust tumani",
  },
  {
    id: "Yangiqo\'rg\'on tumani",
    region_id: "Namangan viloyati",
    region_uz: "Yangiqo\'rg\'on tumani",
  },
  {
    id: "Bulung\'ur tumani",
    region_id: "Samarqand viloyati",
    region_uz: "Bulung\'ur tumani",
  },
  {
    id: "Jomboy tumani",
    region_id: "Samarqand viloyati",
    region_uz: "Jomboy tumani",
  },
  {
    id: "Ishtixon tumani",
    region_id: "Samarqand viloyati",
    region_uz: "Ishtixon tumani",
  },
  {
    id: "Kattaqo\'rg\'on tumani",
    region_id: "Samarqand viloyati",
    region_uz: "Kattaqo\'rg\'on tumani",
  },
  {
    id: "Kattaqo\'rg\'on shahri",
    region_id: "Samarqand viloyati",
    region_uz: "Kattaqo\'rg\'on shahri",
  },
  {
    id: "Qo\'shrabot tumani",
    region_id: "Samarqand viloyati",
    region_uz: "Qo\'shrabot tumani",
  },
  {
    id: "Narpay tumani",
    region_id: "Samarqand viloyati",
    region_uz: "Narpay tumani",
  },
  {
    id: "Nurabod tumani",
    region_id: "Samarqand viloyati",
    region_uz: "Nurabod tumani",
  },
  {
    id: "Oqdaryo tumani",
    region_id: "Samarqand viloyati",
    region_uz: "Oqdaryo tumani",
  },
  {
    id: "Payariq tumani",
    region_id: "Samarqand viloyati",
    region_uz: "Payariq tumani",
  },
  {
    id: "Pastarg\'om tumani",
    region_id: "Samarqand viloyati",
    region_uz: "Pastarg\'om tumani",
  },
  {
    id: "Paxtachi tumani",
    region_id: "Samarqand viloyati",
    region_uz: "Paxtachi tumani",
  },
  {
    id: "Samarqand tumani",
    region_id: "Samarqand viloyati",
    region_uz: "Samarqand tumani",
  },
  {
    id: "Samarqand shahri",
    region_id: "Samarqand viloyati",
    region_uz: "Samarqand shahri",
  },
  {
    id: "Toyloq tumani",
    region_id: "Samarqand viloyati",
    region_uz: "Toyloq tumani",
  },
  {
    id: "Urgut tumani",
    region_id: "Samarqand viloyati",
    region_uz: "Urgut tumani",
  },
  {
    id: "Angor tumani",
    region_id: "Surxandaryo viloyati",
    region_uz: "Angor tumani",
  },
  {
    id: "Boysun tumani",
    region_id: "Surxandaryo viloyati",
    region_uz: "Boysun tumani",
  },
  {
    id: "Denov tumani",
    region_id: "Surxandaryo viloyati",
    region_uz: "Denov tumani",
  },
  {
    id: "Jarqo\'rg\'on tumani",
    region_id: "Surxandaryo viloyati",
    region_uz: "Jarqo\'rg\'on tumani",
  },
  {
    id: "Qiziriq tumani",
    region_id: "Surxandaryo viloyati",
    region_uz: "Qiziriq tumani",
  },
  {
    id: "Qo\'mqo\'rg\'on tumani",
    region_id: "Surxandaryo viloyati",
    region_uz: "Qo\'mqo\'rg\'on tumani",
  },
  {
    id: "Muzrabot tumani",
    region_id: "Surxandaryo viloyati",
    region_uz: "Muzrabot tumani",
  },
  {
    id: "Oltinsoy tumani",
    region_id: "Surxandaryo viloyati",
    region_uz: "Oltinsoy tumani",
  },
  {
    id: "Sariosiyo tumani",
    region_id: "Surxandaryo viloyati",
    region_uz: "Sariosiyo tumani",
  },
  {
    id: "Termiz tumani",
    region_id: "Surxandaryo viloyati",
    region_uz: "Termiz tumani",
  },
  {
    id: "Termiz shahri",
    region_id: "Surxandaryo viloyati",
    region_uz: "Termiz shahri",
  },
  {
    id: "Uzun tumani",
    region_id: "Surxandaryo viloyati",
    region_uz: "Uzun tumani",
  },
  {
    id: "Sherobod tumani",
    region_id: "Surxandaryo viloyati",
    region_uz: "Sherobod tumani",
  },
  {
    id: "Sho\'rchi tumani",
    region_id: "Surxandaryo viloyati",
    region_uz: "Sho\'rchi tumani",
  },
  {
    id: "Boyovut tumani",
    region_id: "Sirdaryo viloyati",
    region_uz: "Boyovut tumani",
  },
  {
    id: "Guliston tumani",
    region_id: "Sirdaryo viloyati",
    region_uz: "Guliston tumani",
  },
  {
    id: "Guliston shahri",
    region_id: "Sirdaryo viloyati",
    region_uz: "Guliston shahri",
  },
  {
    id: "Mirzaobod tumani",
    region_id: "Sirdaryo viloyati",
    region_uz: "Mirzaobod tumani",
  },
  {
    id: "Oqoltin tumani",
    region_id: "Sirdaryo viloyati",
    region_uz: "Oqoltin tumani",
  },
  {
    id: "Sayxunobod tumani",
    region_id: "Sirdaryo viloyati",
    region_uz: "Sayxunobod tumani",
  },
  {
    id: "Sardoba tumani",
    region_id: "Sirdaryo viloyati",
    region_uz: "Sardoba tumani",
  },
  {
    id: "Sirdaryo tumani",
    region_id: "Sirdaryo viloyati",
    region_uz: "Sirdaryo tumani",
  },
  {
    id: "Xavos tumani",
    region_id: "Sirdaryo viloyati",
    region_uz: "Xavos tumani",
  },
  {
    id: "Shirin shahri",
    region_id: "Sirdaryo viloyati",
    region_uz: "Shirin shahri",
  },
  {
    id: "Yangiyer shahri",
    region_id: "Sirdaryo viloyati",
    region_uz: "Yangiyer shahri",
  },
  {
    id: "Angiren shahri",
    region_id: "Toshkent viloyati",
    region_uz: "Angiren shahri",
  },
  {
    id: "Bekabod tumani",
    region_id: "Toshkent viloyati",
    region_uz: "Bekabod tumani",
  },
  {
    id: "Bekabod shahri",
    region_id: "Toshkent viloyati",
    region_uz: "Bekabod shahri",
  },
  {
    id: "Bo\'ka tumani",
    region_id: "Toshkent viloyati",
    region_uz: "Bo\'ka tumani",
  },
  {
    id: "Bo\'stonliq tumani",
    region_id: "Toshkent viloyati",
    region_uz: "Bo\'stonliq tumani",
  },
  {
    id: "Zangiota tumani",
    region_id: "Toshkent viloyati",
    region_uz: "Zangiota tumani",
  },
  {
    id: "Qibray tumani",
    region_id: "Toshkent viloyati",
    region_uz: "Qibray tumani",
  },
  {
    id: "Quyichirchiq tumani",
    region_id: "Toshkent viloyati",
    region_uz: "Quyichirchiq tumani",
  },
  {
    id: "Oqqo\'rg\'on tumani",
    region_id: "Toshkent viloyati",
    region_uz: "Oqqo\'rg\'on tumani",
  },
  {
    id: "Olmaliq shahri",
    region_id: "Toshkent viloyati",
    region_uz: "Olmaliq shahri",
  },
  {
    id: "Ohangaron tumani",
    region_id: "Toshkent viloyati",
    region_uz: "Ohangaron tumani",
  },
  {
    id: "Parkent tumani",
    region_id: "Toshkent viloyati",
    region_uz: "Parkent tumani",
  },
  {
    id: "Piskent tumani",
    region_id: "Toshkent viloyati",
    region_uz: "Piskent tumani",
  },
  {
    id: "O\'rtachirchiq tumani",
    region_id: "Toshkent viloyati",
    region_uz: "O\'rtachirchiq tumani",
  },
  {
    id: "Chinoz tumani",
    region_id: "Toshkent viloyati",
    region_uz: "Chinoz tumani",
  },
  {
    id: "Chirchiq shahri",
    region_id: "Toshkent viloyati",
    region_uz: "Chirchiq shahri",
  },
  {
    id: "Yuqorichirchiq tumani",
    region_id: "Toshkent viloyati",
    region_uz: "Yuqorichirchiq tumani",
  },
  {
    id: "Yangiyo\'l tumani",
    region_id: "Toshkent viloyati",
    region_uz: "Yangiyo\'l tumani",
  },
  {
    id: "Beshariq tumani",
    region_id: "Farg\'ona viloyati",
    region_uz: "Beshariq tumani",
  },
  {
    id: "Bog\'dod tumani",
    region_id: "Farg\'ona viloyati",
    region_uz: "Bog\'dod tumani",
  },
  {
    id: "Buvayda tumani",
    region_id: "Farg\'ona viloyati",
    region_uz: "Buvayda tumani",
  },
  {
    id: "Dang\'ara tumani",
    region_id: "Farg\'ona viloyati",
    region_uz: "Dang\'ara tumani",
  },
  {
    id: "Yozyovon tumani",
    region_id: "Farg\'ona viloyati",
    region_uz: "Yozyovon tumani",
  },
  {
    id: "Quva tumani",
    region_id: "Farg\'ona viloyati",
    region_uz: "Quva tumani",
  },
  {
    id: "Quvasoy shahri",
    region_id: "Farg\'ona viloyati",
    region_uz: "Quvasoy shahri",
  },
  {
    id: "Qo\'qon shahri",
    region_id: "Farg\'ona viloyati",
    region_uz: "Qo\'qon shahri",
  },
  {
    id: "Qo\'shtepa tumani",
    region_id: "Farg\'ona viloyati",
    region_uz: "Qo\'shtepa tumani",
  },
  {
    id: "Marg\'ilon shahri",
    region_id: "Farg\'ona viloyati",
    region_uz: "Marg\'ilon shahri",

  },
  {
    id: "Oltiariq tumani",
    region_id: "Farg\'ona viloyati",
    region_uz: "Oltiariq tumani",
  },
  {
    id: "Rishton tumani",
    region_id: "Farg\'ona viloyati",
    region_uz: "Rishton tumani",
  },
  {
    id: "So\'x tumani",
    region_id: "Farg\'ona viloyati",
    region_uz: "So\'x tumani",
  },
  {
    id: "Toshloq tumani",
    region_id: "Farg\'ona viloyati",
    region_uz: "Toshloq tumani",
  },
  {
    id: "Uchko\'prik tumani",
    region_id: "Farg\'ona viloyati",
    region_uz: "Uchko\'prik tumani",
  },
  {
    id: "O\'zbekiston tumani",
    region_id: "Farg\'ona viloyati",
    region_uz: "O\'zbekiston tumani",
  },
  {
    id: "Farg\'ona tumani",
    region_id: "Farg\'ona viloyati",
    region_uz: "Farg\'ona tumani",
  },
  {
    id: "Farg\'ona shahri",
    region_id: "Farg\'ona viloyati",
    region_uz: "Farg\'ona shahri",
  },
  {
    id: "Furqat tumani",
    region_id: "Farg\'ona viloyati",
    region_uz: "Furqat tumani",
  },
  {
    id: "Bog\'ot tumani",
    region_id: "Xorazm viloyati",
    region_uz: "Bog\'ot tumani",
  },
  {
    id: "Gurlan tumani",
    region_id: "Xorazm viloyati",
    region_uz: "Gurlan tumani",
  },
  {
    id: "Qo\'shko'pir tumani",
    region_id: "Xorazm viloyati",
    region_uz: "Qo\'shko'pir tumani",
  },
  {
    id: "Urganch tumani",
    region_id: "Xorazm viloyati",
    region_uz: "Urganch tumani",
  },
  {
    id: "Urganch shahri",
    region_id: "Xorazm viloyati",
    region_uz: "Urganch shahri",
  },
  {
    id: "Xiva tumani",
    region_id: "Xorazm viloyati",
    region_uz: "Xiva tumani",
  },
  {
    id: "Xazarasp tumani",
    region_id: "Xorazm viloyati",
    region_uz: "Xazarasp tumani",
  },
  {
    id: "Xonqa tumani",
    region_id: "Xorazm viloyati",
    region_uz: "Xonqa tumani",
  },
  {
    id: "Shavot tumani",
    region_id: "Xorazm viloyati",
    region_uz: "Shavot tumani",
  },
  {
    id: "Yangiariq tumani",
    region_id: "Xorazm viloyati",
    region_uz: "Yangiariq tumani",
  },
  {
    id: "Yangibozor tumani",
    region_id: "Xorazm viloyati",
    region_uz: "Yangibozor tumani",
  },
  {
    id: "Bektimer tumani",
    region_id: "Toshkent shahri",
    region_uz: "Bektimer tumani",
  },
  {
    id: "Mirzo Ulug'bek tumani",
    region_id: "Toshkent shahri",
    region_uz: "Mirzo Ulug'bek tumani",
  },
  {
    id: "Mirobod tumani",
    region_id: "Toshkent shahri",
    region_uz: "Mirobod tumani",
  },
  {
    id: "Olmazor tumani",
    region_id: "Toshkent shahri",
    region_uz: "Olmazor tumani",
  },
  {
    id: "Sirg'ali tumani",
    region_id: "Toshkent shahri",
    region_uz: "Sirg'ali tumani",
  },
  {
    id: "Uchtepa tumani",
    region_id: "Toshkent shahri",
    region_uz: "Uchtepa tumani",
  },
  {
    id: "Yashnobod tumani",
    region_id: "Toshkent shahri",
    region_uz: "Yashnobod tumani",
  },
  {
    id: "Chilonzor tumani",
    region_id: "Toshkent shahri",
    region_uz: "Chilonzor tumani",
  },
  {
    id: "Shayxontohur tumani",
    region_id: "Toshkent shahri",
    region_uz: "Shayxontohur tumani",
  },
  {
    id: "Yunusobod tumani",
    region_id: "Toshkent shahri",
    region_uz: "Yunusobod tumani",
  },
  {
    id: "Yakkasaroy tumani",
    region_id: "Toshkent shahri",
    region_uz: "Yakkasaroy tumani",
  },
  {
    id: "Taxiatosh shahri",
    region_id: "Qoraqalpog'iston Respublikasi",
    region_uz: "Taxiatosh shahri",
  },
  {
    id: "Asaka shahri",
    region_id: "Andijon viloyati",
    region_uz: "Asaka shahri",
  },
  {
    id: "Bandixon tumani",
    region_id: "Surxandaryo viloyati",
    region_uz: "Bandixon tumani",
  },
  {
    id: "Ohangaron shahri",
    region_id: "Toshkent viloyati",
    region_uz: "Ohangaron shahri",
  },
  {
    id: "Yangiyo\'l shahri",
    region_id: "Toshkent viloyati",
    region_uz: "Yangiyo\'l shahri",
  },
  {
    id: "Toshkent tumani",
    region_id: "Toshkent viloyati",
    region_uz: "Toshkent tumani",
  },
  {
    id: "Xiva shahri",
    region_id: "Xorazm viloyati",
    region_uz: "Xiva shahri",
  },
  {
    id: "Do'stlik shahri",
    region_id: "Xorazm viloyati",
    region_uz: "Do'stlik shahri",
  },
  {
    id: "Yangihayot tumani",
    region_id: "Toshkent shahri",
    region_uz: "Yangihayot tumani",
  },
  {
    id: "Tuproqqala tumani",
    region_id: "Xorazm viloyati",
    region_uz: "Tuproqqala tumani",
  },
  {
    id: "Davlatobod tumani",
    region_id: "Namangan viloyati",
    region_uz: "Davlatobod tumani",
  },
  {
    id: "G\'ozg\'on shahri",
    region_id: "Navoiy viloyati",
    region_uz: "G\'ozg\'on shahri",
  },
  {
    id: "Bo\'zatov tumani",
    region_id: "Qoraqalpog'iston Respublikasi",
    region_uz: "Bo\'zatov tumani",
  },
  {
    id: "Bandixon tumani",
    region_id: "Surxandaryo viloyati",
    region_uz: "Bandixon tumani",
  },
  {
    id: "Shahrisabz shahri",
    region_id: "Qashqadaryo viloyati",
    region_uz: "Shahrisabz shahri",
  },
]

let chosenRegion = null;
let chosenDistrict = null;
const regionSelect = document.querySelector("#regions");
const districtSelect = document.querySelector("#districts");
let output = "";
regions.forEach((region) => {
  output += `<option value="${region.id}">${region.region_uz}</option>`;
});
regionSelect.innerHTML = output;

regionSelect.addEventListener("change", (e) => {
  const region = e.target.value;
  chosenRegion = region;
  const localDistricts = districts.filter((d) => d.region_id == region);
  let output = "";
  localDistricts.forEach((district) => {
    output += `<option value="${district.id}">${district.region_uz}</option>`;
  });
  districtSelect.innerHTML = output;
});
districtSelect.addEventListener("change", (e) => {
  chosenDistrict = e.target.value;
  const region = regions.filter((r) => r.id == chosenRegion)[0]
  const district = districts.filter((r) => r.id == chosenDistrict)[0];
  const result = {
    region,
    district,
  };
  console.log(result);
});
