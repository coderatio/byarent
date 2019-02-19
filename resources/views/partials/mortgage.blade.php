<div class="widget">
    <h3 class="margin-bottom-30 margin-top-30">Mortgage Calculator</h3>

    <!-- Mortgage Calculator -->
    <form action="javascript:void(0);" autocomplete="off" class="mortgageCalc" data-calc-currency="USD">
        <div class="calc-input">
            <div class="pick-price tip" data-tip-content="Set This Property Price"></div>
            <input type="text" id="amount" name="amount" placeholder="Sale Price" required>
            <label for="amount" class="fa fa-usd"></label>
        </div>

        <div class="calc-input">
            <input type="text" id="downpayment" placeholder="Down Payment">
            <label for="downpayment" class="fa fa-usd"></label>
        </div>

        <div class="calc-input">
            <input type="text" id="years" placeholder="Loan Term (Years)" required>
            <label for="years" class="fa fa-calendar-o"></label>
        </div>

        <div class="calc-input">
            <input type="text" id="interest" placeholder="Interest Rate" required>
            <label for="interest" class="fa fa-percent"></label>
        </div>

        <button class="button calc-button" formvalidate>Calculate</button>
        <div class="calc-output-container"><div class="notification success">Monthly Payment: <strong class="calc-output"></strong></div></div>
    </form>
    <!-- Mortgage Calculator / End -->

</div>
