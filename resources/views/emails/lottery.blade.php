<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lottery Tickets</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        .ticket {
            width: 300px;
            border: 2px solid #000;
            border-radius: 10px;
            margin: 20px auto;
            padding: 20px;
            display: inline-block;
            margin-right: 20px;
        }

        .header {
            font-size: 24px;
            font-weight: bold;
        }

        .logo {
            max-width: 100px;
            margin: 10px auto;
        }

        .numbers {
            font-size: 36px;
            margin-top: 10px;
        }

        .contest-code {
            margin-top: 10px;
            font-size: 18px;
        }

        .footer {
            font-size: 16px;
            margin-top: 10px;
        }

        .disclaimer {
            margin-top: 20px;
            font-size: 12px;
        }
    </style>
</head>
<body>
@foreach ($data['tickets'] as $ticketData)
    <div class="ticket" style="background-color: {{ randomColor() }};">
        <div class="header">Lottery Ticket</div>
        <img src="{{ $data['logo'] }}" alt="Lottery Logo" class="logo">
        <div class="numbers">
            Ticket no: {{$ticketData['ticket_no']}}
        </div>
        <div class="contest-code">Contest Code: {{ $ticketData['contest_code'] }}</div>
        <div class="footer">Draw Date: {{ $ticketData['draw_date'] }}</div>
        <div class="disclaimer">Keep this ticket in a safe place. Good luck!</div>
    </div>
@endforeach
@php
    function randomColor() {
        do {
            $letters = '0123456789ABCDEF';
            $color = '#';
            for ($i = 0; $i < 6; $i++) {
                $color .= $letters[rand(0, 15)];
            }
        } while ($color === '#000000'); // Continue generating until not black
        return $color;
    }
@endphp
</body>
</html>
