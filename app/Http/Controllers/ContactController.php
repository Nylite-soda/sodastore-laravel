
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Form validation and submission logic here...

        return redirect()->route('thank-you');
    }
}