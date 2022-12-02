import java.io.File;

public class Main {

    public static void main(String[] args) {
        File sourceFolder = new File("//home//development//Desktop//test/bt");
        File destinationFolder = new File("//home//development//Desktop//test//s//");

        if (!destinationFolder.exists())
        {
            destinationFolder.mkdirs();
        }

        // Check weather source exists and it is folder.
        if (sourceFolder.exists() && sourceFolder.isDirectory())
        {
            // Get list of the files and iterate over them
            File[] listOfFiles = sourceFolder.listFiles();

            if (listOfFiles != null)
            {
                for (File child : listOfFiles )
                {
                    // Move files to destination folder
                    child.renameTo(new File(destinationFolder  + "//"+ child.getName()));

                }

            }
            System.out.println(destinationFolder + "  files transfered.");
        }
        else
        {
            System.out.println(sourceFolder + "  Folder does not exists");
        }

    }

}


