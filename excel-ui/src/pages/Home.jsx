import { DataGrid } from "@mui/x-data-grid";
import React, { useState } from "react";
import { index } from "../api/product";

export default function Home() {
    const columns = [
        { field: "id", headerName: "ID" },
        { field: "name", headerName: "Service Name", width: 160 },
        { field: "price", headerName: "Price" },
        { field: "created_at", headerName: "Create At", width: 200 },
        { field: "updated_at", headerName: "Update At", width: 200 },
        {
            field: "actions",
            headerName: "",
            sortable: false,
            filterable: false,
            renderCell: (params) => (
                <Box
                    sx={{
                        display: "flex",
                        gap: 1,
                        justifyContent: "center",
                        alignItems: "center",
                        height: "100%",
                    }}
                >
                    <Button
                        variant="contained"
                        color="warning"
                        onClick={() => setEditServiceDialog({ ...params.row })}
                    >
                        Edit
                    </Button>
                    <Button
                        variant="contained"
                        color="error"
                        onClick={() => setServiceDeleteDialog(params.row.id)}
                    >
                        Delete
                    </Button>
                </Box>
            ),
            width: 200,
        },
    ];
    const [rows, setRows] = useState([]);
    const refreshData = () => {
        index().then((res) => {
            if (res?.ok) {
                setRows(res.data);
            } else {
                toast.error(res?.message ?? "Something went wrong.");
            }
        });
    };
    return (
        <main>
            <DataGrid rows={rows} columns={columns} />
        </main>
    );
}
