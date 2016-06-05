package applications.loginandregister;

import android.content.Context;
import android.content.SharedPreferences;
import android.os.Bundle;
import android.support.annotation.Nullable;
import android.support.v7.app.AppCompatActivity;
import android.widget.TextView;

/**
 * Created by Mitch on 2016-06-04.
 */
public class LogginIn extends AppCompatActivity {
    TextView name,email;
    SharedPreferences preferences;

    @Override
    protected void onCreate(@Nullable Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.logged_in_layout);

        email = (TextView) findViewById(R.id.textEmail);
        name = (TextView) findViewById(R.id.textName);
        preferences = this.getSharedPreferences("MYPREFS", Context.MODE_PRIVATE);

        String mName = preferences.getString("name","ERROR getting name");
        String mEmail = preferences.getString("email","ERROR getting email");
        name.setText(mName);
        email.setText(mEmail);
    }
}
