import HTML
table_data = [
        ['Last name',   'First name',   'Age'],
        ['Smith',       'John',         30],
        ['Carpenter',   'Jack',         47],
        ['Johnson',     'Paul',         62],
    ]
htmlcode = HTML.table(table_data)
print htmlcode
A header row may be specified: it will appear in bold in browsers

table_data = [
        ['Smith',       'John',         30],
        ['Carpenter',   'Jack',         47],
        ['Johnson',     'Paul',         62],
    ]

htmlcode = HTML.table(table_data,
    header_row=['Last name',   'First name',   'Age'])
print htmlcode