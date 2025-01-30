<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Contact Messages</title>
    <style>
        body {
            background-color: #f4f2f2;
            color: #45322C;
            font-family: Arial, sans-serif;
            padding: 2rem;
        }
        .contacts-table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
        }
        .contacts-table th,
        .contacts-table td {
            padding: 1rem;
            border: 1px solid #F1D3B3;
        }
        .contacts-table th {
            background-color: #45322C;
            color: #f4f2f2;
        }
        .contacts-table tr:nth-child(even) {
            background-color: #F1D3B3;
        }
        .action-btn {
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            color: white;
        }
        .delete-btn {
            background-color: #dc3545;
        }
        .respond-btn {
            background-color: #45322C;
        }
    </style>
</head>
<body>
<h1>Contact Messages</h1>
    
    @if(session('success'))
        <div style="background-color: #d4edda; color: #155724; padding: 1rem; margin-bottom: 1rem; border-radius: 4px;">
            {{ session('success') }}
        </div>
    @endif

    <table class="contacts-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Message</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
            <tr>
                <td>{{ $contact->first_name }} {{ $contact->last_name }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->tel }}</td>
                <td>{{ $contact->message }}</td>
                <td>{{ $contact->created_at->format('Y-m-d H:i') }}</td>
                <td>
                    <form action="{{ route('admin.contacts.destroy', $contact) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="action-btn delete-btn" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                    <button class="action-btn respond-btn" onclick="showResponseForm('{{ $contact->id }}')">Respond</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $contacts->links() }}

    <!-- Response Modal (you'll need to style this according to your needs) -->
    <div id="responseModal" style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 2rem; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
        <h2>Respond to Contact</h2>
        <form id="responseForm" action="" method="POST">
            @csrf
            <textarea name="response" rows="4" style="width: 100%; margin-bottom: 1rem;" required></textarea>
            <button type="submit" class="action-btn respond-btn">Send Response</button>
            <button type="button" onclick="hideResponseForm()" style="margin-left: 1rem;">Cancel</button>
        </form>
    </div>

    <script>
        function showResponseForm(contactId) {
            document.getElementById('responseModal').style.display = 'block';
            document.getElementById('responseForm').action = `/admin/contacts/${contactId}/respond`;
        }

        function hideResponseForm() {
            document.getElementById('responseModal').style.display = 'none';
        }
    </script>
</body>
</html>
