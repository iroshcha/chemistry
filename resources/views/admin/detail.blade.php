@extends('layouts.admin.base')
@section('styles')
    <link rel="stylesheet" href="/styles/admin.css">
@endsection('styles')
@section('main')
<div class="container  .mx-auto  p-5">
    <div class="fs-1">Ученик {{ $user->name }} </div>
    @if ($topics->isEmpty())
        <div class="fs-1">Нет назначеных тем!</div>
    @else
        <div class="container">
            <div class="row bg-secondary">
                <div class="col-sm fs-4 border border-dark">
                    #
                </div>
                <div class="col-sm fs-4 border border-dark">
                    Название
                </div>
            </div>
            @foreach ($topics as $topic)
                <div class="row  js-col" data="{{ $topic->id }}">
                    <div class="col-sm border border-dark p-2">
                        {{ $topic->id }}
                    </div>
                    <div class="col-sm border border-dark  p-2">
                        {{ $topic->name }}
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
<script>
    $('document').ready(function (){

        $('.js-col').click(function(e) {
            if ( $(e.target).closest('.btn-group').length !== 0 ) {
                return;
            }
            window.location.href = '/admin/topics/' + $(this).attr('data')+'/subtopics';
        })
    });
</script>
@endsection('main')
class Money implements Expression
Money(int amount, String currency) {
this.amount = amount;
this.currency = currency;
}

static Money franc(int amount) {
return new Money (amount, «CHF»);
}

static Money dollar(int amount) {
return new Money (amount, «USD»);
}
Expression times(int multiplier) {
return new Money (amount * multiplier, currency);
}

public String toString() {
return amount + " " + currency;
}

Expression plus(Expression addend) {
return new Sum(this, addend);
}

public Money reduce(Bank bank, String to) {
    int rate = bank.rate(currency, to);
    return new Money(amount / rate, to);
}




Expression
interface Expression
Money reduce(Bank bank, String to);
Expression plus(Expression addend);
Expression times(int multiplier);


Bank
class Bank {

    private Hashtable rates = new Hashtable();

    Money reduce(Expression source, String to) {
        return (Money) source.reduce(this, to);
    }


    void addRate(String from, String to, int rate) {
        rates.put(new Pair(from, to), new Integer(rate));
    }

    int rate(String from, String to) {
        if (from.equals(to)) return 1;
        Integer rate = (Integer) rates.get(new Pair(from, to));
        return rate.intValue();
    }


}



class Sum implements Expression

class Sum {

    Money augend;
    Money addend;

    Sum(Expression augend, Expression addend) {
        this.augend = augend;
        this.addend = addend;
    }
    public Money reduce(Bank bank, String to) {
        int amount= augend.reduce(bank, to). amount + addend.reduce(bank, to). amount;
        return new Money(amount, to);
    }
    public Expression plus(Expression addend) {
        return new Sum(this, addend);
    }
    Expression times(int multiplier) {
        return new Sum(augend.times(multiplier), addend.times(multiplier));
    }
}


Pair
private class Pair {

    private String from;
    private String to;

    Pair(String from, String to) {
        this.from = from;
        this.to = to;
    }

    public boolean equals(Object object) {
        Pair pair = (Pair) object;
        return from.equals(pair.from) && to.equals(pair.to);
    }

    public int hashCode() {
        return 0
    }
}
