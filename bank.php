<?php
// Include class definitions
require_once 'classes/Account.php';
require_once 'classes/Customer.php';
// Create array with 4 Account objects
$accounts = [
    new Account('1234-9875-90', 'Savings Account', 80000.00),
    new Account('2345-7654-01', 'Current Account', -140.50),
    new Account('3456-3487-12', 'Time Deposit', 180000.00),
    new Account('4567-0985-23', 'Checking Account', 8500.75)
];
// Create Customer object with accounts
$customer = new Customer('Casey', 'Ong', 'caseyong@gmail.com', $accounts);
// Include header
include 'includes/header.php';
?>
<main>
    <div class="customer-info">
        <h2>Welcome, <?php echo $customer->getFullName(); ?>!</h2>
        <p>Email: <?php echo $customer->email; ?></p>
    </div>
    <div class="accounts-section">
        <h3>Your Account Summary</h3>
        <table>
            <thead>
                <tr>
                    <th>Account Number</th>
                    <th>Account Type</th>
                    <th>Balance</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Loop through each account
                foreach ($customer->accounts as $account) {
                    echo '<tr>';
                    // Display account number and type
                    echo '<td>' . $account->number . '</td>';
                    echo '<td>' . $account->type . '</td>';
                    // Check balance and apply class
                    if ($account->balance >= 0) {
                        // Positive balance - credit class
                        echo '<td class="credit">₱' . $account->getBalance() . '</td>';
                    } else {
                        // Negative balance - overdrawn class
                        echo '<td class="overdrawn">₱' . $account->getBalance() . '</td>';
                    }
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</main>
<?php include 'includes/footer.php'; ?>