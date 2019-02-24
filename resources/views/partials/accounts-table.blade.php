<table>
    <tr>
        <th>Account Type</th>
        <th>Account Name</th>
        <th>Place</th>
        <th>Status</th>
        <th>Revenue</th>
        <th>Created</th>
    </tr>
    @each('partials.table-column', $accounts, 'account', 'partials.empty-table-column')
</table>